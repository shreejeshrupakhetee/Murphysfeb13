<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Murphys Technology</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #6</span> <br>
                    <span>Date:</span>
                    <span>{{ Auth::user()->created_at }}</span>
                     <br>
                    <span>{{ Auth::user()->postcode }}</span> <br>
                    <span>Homebush NSW 2140</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{  }}</td>

                <td>Full Name:</td>
                <td>{{ Auth::user()->firstname }} 
                    {{ Auth::user()->lastname }} </td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td></td>

                <td>Email Id:</td>
                <td>{{ Auth::user()->email }} </td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>22-09-2022 10:54 AM</td>

                <td>Phone:</td>
                <td>{{ Auth::user()->phone }} </td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>Cash on Delivery</td>

                <td>Address:</td>
                <td>{{ Auth::user()->streetaddress1 }}</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>completed</td>

                <td>Pin code:</td>
                <td>{{ Auth::user()->postcode }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="10%">16</td>
                <td>
                        Hosting
                </td>
                <td width="10%">$14000</td>
                <td width="10%">1</td>
                <td width="15%" class="fw-bold">$14000</td>
            </tr>
            <tr>
                <td width="10%">17</td>
                <td>
                    Web Hosting
                </td>
                <td width="10%">$699</td>
                <td width="10%">1</td>
                <td width="15%" class="fw-bold">$699</td>
            </tr>
            <tr>
                <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                <td colspan="1" class="total-heading">$14699</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your for your purchase !!
    </p>

</body>
</html>