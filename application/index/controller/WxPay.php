<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 19:29
 */

namespace app\index\controller;


use Endroid\QrCode\QrCode;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
use think\Loader;

class WxPay
{
    public function index()
    {
        Loader::import('wxpay.Autoloader', EXTEND_PATH);
        $notify = new \NativePay();
        $input = new \WxPayUnifiedOrder();//统一下单输出对象
        $input->SetBody('微信Pay');//
        $input->SetOut_trade_no(date('YmdHis') . mt_rand(1000, 9999) . uniqid());//生成订单号
        $url = '';
        $input->SetNotify_url($url);//回调地址
        $input->SetTotal_fee('1');//支付金额（单位：分）
        $input->SetTrade_type('NATIVE');//设置支付方式->扫码支付
        $input->SetProduct_id('100');//商品id
        $result = $notify->GetPayUrl($input);//获取支付url
//        $code_url=$result['code_url'];

    }

    /**
     * 生成二维码
     */
    public function qrcode()
    {
        $html=file_get_contents('http://www.qyice.co/index/index/index');
        date_default_timezone_set('Asia/Shanghai');
        $pdf = new \TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator('Helloweba');
        $pdf->SetAuthor('yueguangguang');
        $pdf->SetTitle('Welcome to helloweba.com!');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, PHP');
        $image_file = K_PATH_IMAGES . 'bkground.png';
        $pdf->setPrintHeader(true); //设置打印页眉
        $pdf->setPrintFooter(false); //设置打印页脚
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 061', PDF_HEADER_STRING);
//        设置页眉页脚字体
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
//set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetMargins(1, 15, 1);//左、右、上
        $pdf->SetAutoPageBreak(TRUE, 15);//下
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->AddPage();
        $pdf->lastPage();
        $pdf->Ln(4);
        $pdf->writeHTML($html, true, false, true, false, '');
        $linestyle = array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => '', 'phase' => 0, 'color' => array(143,195,226));
        $pdf->Line(6, 32, 200, 32, $linestyle);
        $pdf->SetLeftMargin(0);
        $pdf->SetRightMargin(0);
        $pdf->Output('index.pdf', 'D');

    }

    public function a()
    {
        $this->qrcode('www.baidu.com');

    }

}