<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>รายงานบิลเงินสดสุทธิ</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        text-align: left;
    } 
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: bold;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew Bold.ttf')}}") format('truetype');
}

body,td,tr,th,h4 {
  font-family : 'THSarabunNew'
}
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.picz.in.th/images/2018/04/03/SyhLae.jpg" style="width:300px; max-width:300px;">
                            </td>
                            
                            <td>
                                รหัสใบเสร็จ : {{$invoice->id}}<br>
                                วันออกใบเสร็จ : {{date('d-m-Y', strtotime($invoice->created_at))}}

                                
                                
                            
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{$invoice->customer->address}}
                            </td>
                            
                            <td>
                                {{$invoice->customer->first_name .' '. $invoice->customer->last_name}}<br>
                                {{$invoice->room->building .' '. $invoice->room->number}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        
            
            <tr class="heading">
                <td>
                    รายการ
                </td>
                
                <td>
                    ราคา
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    ค่าห้อง
                </td>
                
                <td>
                    {{$invoice->room_price}} บาท
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    ค่าอินเตอร์เน็ต
                </td>
                
                <td>
                {{$invoice->internet_price}} บาท
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    ยูนิตค่าน้ำ (17 บาท/ยูนิต)
                </td>
                
                <td>
                {{($invoice->water_unit-$invoice->last_water_unit)* 17}} ({{$invoice->water_unit-$invoice->last_water_unit}}) บาท/หน่วย
                </td>
            </tr>

            <tr class="item last">
                <td>
                    ยูนิตค่าไฟฟ้า (8 บาท/ยูนิต)
                </td>
                
                <td>

                {{($invoice->electricity_unit-$invoice->last_electricity_unit)*8}} ({{$invoice->electricity_unit-$invoice->last_electricity_unit}}) บาท/หน่วย
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                ราคาทั้งหมด {{$invoice->total}} บาท
                </td>
            </tr>
        </table>
    </div>
</body>
</html>