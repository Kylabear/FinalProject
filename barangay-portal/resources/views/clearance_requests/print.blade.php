<!DOCTYPE html>
<html>
<head>
    <title>Barangay Clearance</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 40px;
            color: #000;
        }

        .center {
            text-align: center;
        }

        .header {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .content {
            margin-top: 40px;
            font-size: 18px;
        }

        .signature {
            margin-top: 80px;
            text-align: right;
            font-size: 18px;
        }

        .btn-print {
            display: none;
        }

        @media print {
            .btn-print {
                display: none;
            }
        }
    </style>
</head>
<body onload="window.print()">

    <div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ asset('images/barangay-logo.png') }}" alt="Barangay Logo" width="120">
        <h3>Republic of the Philippines</h3>
        <h4>City of Baguio </h4>
        <h1><u>BARANGAY CLEARANCE</u></h1>
    </div>

    <div class="content">
        <p>To Whom It May Concern:</p>

        <p>This is to certify that <strong>{{ $request->name }}</strong>, residing at <strong>{{ $request->address }}</strong>, has requested a Barangay Clearance for the purpose of <strong>{{ $request->purpose }}</strong>.</p>

        <p>This certification is being issued upon request of the above-named individual for whatever legal purpose it may serve.</p>

        <p>Issued this {{ \Carbon\Carbon::parse($request->created_at)->format('jS') }} day of {{ \Carbon\Carbon::parse($request->created_at)->format('F, Y') }} at the Office of the Barangay Captain.</p>
    </div>

    <div class="signature">
        <p><strong>Barangay Captain</strong></p>
        <p>__________________________</p>
    </div>
</body>
</html>
