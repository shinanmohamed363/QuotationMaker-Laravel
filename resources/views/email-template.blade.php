<!DOCTYPE html>
<html>
<head>
    
</head>
<body >
    <div style="font-family: 'Arial', sans-serif; margin: 20px; background-color: #eee;">
        <div style="margin: 20px auto; max-width: 1600px; padding: 20px; border: 1px solid rgb(221, 221, 221); border-radius: 10px; background: linear-gradient(rgb(255, 255, 255), rgb(242, 242, 242)); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px;">
        <div style="margin-bottom: 20px; text-align: right;"><img style="float: left;" src="	https://oneday.digital/wp-content/uploads/2020/11/web-logo-size-790x323.png" alt="Plus Icon from Icons8" width="259" height="110">
        <table style="border-collapse: collapse; width: 23.1875%; height: 156px; border-width: 0px; margin-right: 0px; margin-left: auto;" border="1"><colgroup><col style="width: 100%;"></colgroup>
        <tbody>
        <tr style="height: 54px;">
        <td style="height: 54px; border-width: 0px; text-align: left;">
        <p><span style="text-decoration: underline;"><strong><span style="font-size: 14pt;">ONE DAY DIGITAL PVT LTD</span></strong></span></p>
        </td>
        </tr>
        <tr style="height: 18px;">
        <td style="height: 18px; border-width: 0px; text-align: left;"><span style="font-size: 10pt;"><strong>Address</strong>:201/E, kandy Road,Tihariya,Srilanka</span></td>
        </tr>
        <tr style="height: 18px;">
        <td style="height: 18px; border-width: 0px; text-align: left;"><span style="font-size: 10pt;"><strong>Email</strong>:admin@oneday.digital</span></td>
        </tr>
        <tr style="height: 18px;">
        <td style="height: 18px; border-width: 0px; text-align: left;"><span style="font-size: 10pt;"><strong>Website</strong>:www.oneday.digital</span></td>
        </tr>
        <tr style="height: 18px;">
        <td style="height: 18px; border-width: 0px; text-align: left;"><span style="font-size: 10pt;"><strong>Mobile</strong>:0740977776/0772777079</span></td>
      
        </tbody>
        </table>
        </div>
        <div style="margin-bottom: 20px;">&nbsp;</div>
        <h1 style="color: rgb(85, 85, 85); margin-top: 10px; text-align: center;"><span style="text-decoration: underline;"><strong>QUOTATION-{{ ucwords(Session::get('user')['name']) }}</strong></span></h1>
        <div style="overflow-x: auto;">
            <style>
                /* Style the table header */
                .table-header {
                    background-color: yellow;
                }
            
                /* Style every even row */
                .table-row-even {
                    background-color: #f2f2f2;
                }
            
                /* Style every odd row */
                .table-row-odd {
                    background-color: #ddd;
                }
            </style>
            
            <!-- Your table goes here -->
            
            <table style="width: 100%;border-collapse: separate;border: 0.5px solid black;border-spacing: 0; ">
                <thead class="table-header" style="background-color: #FFC000; height: 50px;border-radius: 10px; ">
                    <tr style="background-color:#FFC000;">
                        <th style="border: 0.5px solid black; overflow-wrap: break-word; width: 70.111%; padding-left: 10px;font-size:14px"><strong>Description</strong></th>
                        <th style="border: 0.5px solid black; overflow-wrap: break-word; width: 29.889%; padding-left: 10px;font-size:14px"><strong>Price</strong></th>
                    </tr>
                </thead>
                @forEach($body as $item)
                <tbody><!-- Repeat this block for each item -->
                    <tr style="@if($loop->iteration % 2 == 0) background-color:#ffffff ; @else background-color:#FFF2CC ; @endif">
                        <td style="border: 1px solid #D3D3D3; padding-left: 10px; padding-top:10px; paddword-wrap: break-word; white-space: normal; max-width: 500px; ">
                            <strong>Name:</strong>{{ $item->name }}<br><strong style="padding-top:10px;" >Features:</strong>
                            <ul>
                                <?php
                                $description = $item->description; // your paragraph
                                $sentences = explode('.', $description); // split the paragraph into sentences
                                
                                foreach ($sentences as $sentence) {
                                    $sentence = trim($sentence); // remove leading/trailing white spaces
                                    if (!empty($sentence)) { // check if the sentence is not empty
                                        echo "<li>{$sentence}.</li>"; // print each sentence as a list item
                                    }
                                }
                                ?>
                                <!-- Add more list items as needed -->
                            </ul>
                        </td>
                        <td style="border: 1px solid #D3D3D3; overflow-wrap: break-word; width: 29.889%; text-align: center;">{{ $item->price }} LKR <br>One Time Payment</td>
                    </tr>
                    <!-- End of block -->
                </tbody>                
                @endForEach
            </table>       
        <table style="border-collapse: collapse; width: 100%; border-width: 0px;" border="1"><colgroup><col style="width: 70.1689%;"><col style="width: 29.8311%;"></colgroup>
            <tbody>
            <tr style="background-color:#FFC000; height: 30px;width: 100%; 
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            border: 1px solid black;">
            <td style="border-width: 0px; text-align: center;font-size:14px"><strong>Total</strong></td>
            <td style="text-align: center; border-width: 0px;font-size:14px"><strong>{{ $total }}LKR</strong></td>
            </tr>
            </tbody>
            </table>
        </div>
        <div style=" width: 100%; max-width:1100px;word-wrap: break-word;">
            <h2><span style="text-decoration: underline; font-size: 14pt;">Payment Terms</span></h2>
            <ul>
            <li>50% to be paid in advance to start development and the rest to be paid after completion.</li>
            <li>Quotation is valid for seven days dayes effectively form january 24th ,2024</li>
            </ul>
            </div>
            <!-- Other Terms and Conditions -->
            <div style="width: 100%;max-width:1100px;word-wrap: break-word;">
            <h2><span style="text-decoration: underline; font-size: 14pt;">Other Terms and Conditions</span></h2>
            <ul>
            <li>Project Process
            <ol>
            <li>Development timeframe: One working day</li>
            <li>Domine need to be provided by the client we will start developing the website in our subdomin and in our server.when the domain and the hosting is connected will migrate the site into it.</li>
            <li>Images,biusiness name,tagline,social media profile and basic information to be provided to commence the work.</li>
            <li>Any additional content or image changes during the development will involve additional cost and may delay the project completion.</li>
            </ol>
            </li>
            <li>Any additional requirement / Technical development will involve additional cost.</li>
            <li>Website functionality issues-One Day Digital will rectify in 24-48hrs hours during working days</li>
            </ul>
            </div>
            <!-- Portfolio -->
            <div style=" width: 100%; max-width:1100px; word-wrap: break-word;">
            <h2><span style="text-decoration: underline; font-size: 14pt;">Our Portfolio</span></h2>
            <table style="width: 101.2%; border-collapse: collapse;">
            <tbody>
            <tr>
            <td style="width: 60.9218%;"><a href="http://www.kidshop.com">www.kidshop.com</a></td>
            <td style="width: 39.0782%;"><a href="http://www.pet.com">www.pet.com</a></td>
            </tr>
            <tr>
            <td style="width: 60.9218%;"><a href="http://www.musicstore.com">www.musicstore.com</a></td>
            <td style="width: 39.0782%;">&nbsp;</td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>
        </div>
    </div>


</body>
<style>
    /* CSS for larger displays (like PCs) */
@media (min-width: 992px) {
    div {
        width: 750px;
        word-wrap: break-word;
    }
}

/* CSS for smaller displays (like mobile phones) */
@media (max-width: 1100px) {
    div {
        width: 100%;
        word-wrap: break-word;
    }
}

    </style>
</html>
