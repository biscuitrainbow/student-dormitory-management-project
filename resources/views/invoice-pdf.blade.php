<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
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
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:300px; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: {{$invoice->id}}<br>
                                Created: {{$invoice->created_at->toFormattedDateString()}}
                                
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
                                {{$invoice->customer->e_mail}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Room price
                </td>
                
                <td>
                    {{$invoice->room_price}}
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Net price
                </td>
                
                <td>
                {{$invoice->internet_price}}
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Water unit (17 bath/unit)
                </td>
                
                <td>
                {{($invoice->water_unit-$invoice->last_water_unit)* 17}} ({{$invoice->water_unit-$invoice->last_water_unit}})
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Electricity unit (8 bath/unit)
                </td>
                
                <td>

                {{($invoice->electricity_unit-$invoice->last_electricity_unit)*8}} ({{$invoice->electricity_unit-$invoice->last_electricity_unit}})
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                {{$invoice->total}}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>