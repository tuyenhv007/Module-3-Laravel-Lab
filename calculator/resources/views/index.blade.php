<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form action="{{route('calculator')}}" method="post">
    <div class="container col-6">
        <div class="container col-6">
            <input type="text" class="calculator-screen z=depth-1" id="result" name="result" value="@if(isset($result)){{$result}} @endif" readonly>
        </div>
        <div class="calculator-keys">
            <div class="container col-6">
                <button class="operator btn btn-info" type="button" value="+" onclick="btnClick(this.value)">+</button>
                <button class="operator btn btn-info" type="button" value="-" onclick="btnClick(this.value)">-</button>
                <button class="operator btn btn-info" type="button" value="*" onclick="btnClick(this.value)">*</button>
                <button class="operator btn btn-info" type="button" value="/" onclick="btnClick(this.value)">/</button>
            </div>

            <div class="container col-6">
                <button class="btn btn-light waves-effect" type="button" value="7" onclick="btnClick(this.value)">7</button>
                <button class="btn btn-light waves-effect" type="button" value="8" onclick="btnClick(this.value)">8</button>
                <button class="btn btn-light waves-effect" type="button" value="9" onclick="btnClick(this.value)">9</button>
            </div>

            <div class="container col-6">
                <button class="btn btn-light waves-effect" type="button" value="4" onclick="btnClick(this.value)">4</button>
                <button class="btn btn-light waves-effect" type="button" value="5" onclick="btnClick(this.value)">5</button>
                <button class="btn btn-light waves-effect" type="button" value="6" onclick="btnClick(this.value)">6</button>
            </div>

            <div class="container col-6">
                <button class="btn btn-light waves-effect" type="button" value="1" onclick="btnClick(this.value)">1</button>
                <button class="btn btn-light waves-effect" type="button" value="2" onclick="btnClick(this.value)">2</button>
                <button class="btn btn-light waves-effect" type="button" value="3" onclick="btnClick(this.value)">3</button>
            </div>

            <div class="container col-6">
                <button class="btn btn-light waves effect" value="0" onclick="btnClick(this.value)">0</button>
                <button class="decimal function btn btn-secondary" type="button" value="." onclick="btnClick(this.value)">.</button>
                <button class="all-clear funtion btn btn-danger btn-sm" value="all-clear" type="reset">AC</button>
                <button class="equal-sign operator btn btn-default" value="=">=</button>
            </div>
        </div>
    </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script>
    let result = document.getElementById('result');
    function btnClick(operator) {
        result.value += operator;
    }
    function reset() {
        result.value = "";
    }
</script>
</html>
