<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>
</head>
<body>
    <iframe src="{{ url('arsip-surat/' . $file) }}" style="width: 100%; height: 100vh;" frameborder="0" onload="this.contentWindow.focus(); this.contentWindow.print();"></iframe>
</body>
</html>
