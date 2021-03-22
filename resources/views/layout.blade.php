<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
    .header
    {
        font-size: 40pt;
        margin: 0;
        line-height: 0.5px;
    }
    body
    {
        background-color: #EBECF0;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
    }
    li
    {
        display: flex;
        float: left;
    }
    li a
    {
        display: block;
        text-decoration: none;
        padding: 10px 12px;
        text-align: center;
        color: white;
    }
    .backgroundContent
    {
        background-color: #D3d3d3;
        padding: 0.1px;
    }
    .content
    {
        background-color: white;
        margin: 10px;
        padding: 3px;
    }
    .flexbox
    {
        display: inline-flex;
        align-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap; 
    }
    .flexbox >div
    {
        padding: 10px;
    }
    img
    {
        height: 400px;
        width: 300px;
    }
    .listfilm
    {
        text-align: center;
        font-size: 20pt;
    }
    .btnLF
    {
        background-color: #333;
        color: white;
        font-size: 14pt;
        margin: 5px;
        padding: 3px;
    }
    .LF
    {
        text-decoration: none;
        color: white;
    }
    .titleDetail
    {
        font-size: 20pt;
    }
    .descbox
    {
        width: 300px;
        font-size: 10pt;
        text-align: justify;
    }
    .epsDetail
    {
        font-size: 15pt;
    }
    table 
    {
        border-collapse: collapse;
        width: 100%;
    }

    td, th 
    {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) 
    {
        background-color: #dddddd;
    }
    
    .pagination 
    {
        display: inline;
        font-display: inherit;
    }

    .pagination a
    {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
    }
    .pagination a.active{
        border: 1px solid #ddd;
    }
    .page-item :active
    {
        border: 1px solid #ddd;
    }
</style>
<script>
    function back()
    {
        window.history.back();
    }
</script>
<body>
    <nav>
        <div class="header">
            <p><b>BeeFlix</p>
        </div>
        <div class="navigation">
            <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;">
                <li style="background-color: #333;"><a onclick="back()">&#8656; KEMBALI</a></li>
                <li style="background-color: whitesmoke"><a href="/" style="color: black">LIHAT SEMUA FILM</a></li>
            </ul>
        </div>
    </nav>
    @yield('container')

</body>
</html>