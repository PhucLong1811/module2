<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <style type="text/css" media="screen">
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid #000;
    }

    h1{
        color: #000;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

 
    br{
        clear: left;
    } 
</style>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form method="POST" action="calculator">
            @csrf
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="description"/><br/>
                <label>List Price:</label>
                <input type="text" name="price"/><br/>
                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"/>(%)<br/>
                <input type="submit" value="Calculate Discount" style="margin-left: 178px;">
            </div>
            
        </form>
    </div>
</body>
</html>