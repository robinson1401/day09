<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Q & A</title>
</head>
<script>
    var result=[]
    function getData() {
        if (result.length<5) {
        for (let i=1;i<=5;++i) {
            let rates=document.querySelector(`input[name='${i}']:checked`) ;
            result.push((rates!=null) ? rates.value : '0');
        }
    }
        document.cookie =result;
}
</script>
<body>
    <div id='contain'>
            <fieldset id="q1">
              <legend>1. Kết quả của phép tính 1 + 1 = ?</legend>
                  <input type="radio" name="1" id="answer1" value="1" />
                  <label for="answer1">100</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="2" />
                  <label for="answer1">2</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="3" />
                  <label for="answer1">2000</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="4" />
                  <label for="answer1">345345</label>
                  <br/>
            </fieldset>  
            <fieldset id="q2">
                <legend>2. Ai là người đặt tên cho dòng sông?</legend>
                    <input type="radio" name="2" id="answer3" value="1" />
                    <label for="answer1">Đen Vâu</label>
                    <br />
                    <input type="radio" name="2" id="answer4" value="2" />
                    <label for="answer2">Sơn Tùng</label>
                    <br />
                    <input type="radio" name="2" id="answer3" value="3" />
                    <label for="answer1">Độ Mixi</label>
                    <br />
                    <input type="radio" name="2" id="answer3" value="4" />
                    <label for="answer1">Không có ai</label>
            </fieldset>
            <fieldset id="q3">
                <legend>3. Muốn học giỏi PHP cần làm gì ???</legend>
                    <input type="radio" name="3" id="answer3" value="1" />
                    <label for="answer1">Học</label>
                    <br />
                    <input type="radio" name="3" id="answer4" value="2" />
                    <label for="answer2">Học nữa</label>
                    <br />
                    <input type="radio" name="3" id="answer3" value="3" />
                    <label for="answer1">Học mãi</label>
                    <br />
                    <input type="radio" name="3" id="answer3" value="4" />
                    <label for="answer1">Nghỉ học</label>
            </fieldset>
            <fieldset class="q4">
                <legend>4. Loại quả nào không ăn được?</legend>
                    <input type="radio" name="4" id="answer3" value="1" />
                    <label for="answer1">Quả xoài</label>
                    <br />
                    <input type="radio" name="4" id="answer4" value="2" />
                    <label for="answer2">Quả cảm</label>
                    <br />
                    <input type="radio" name="4" id="answer3" value="3" />
                    <label for="answer1">Quả đấm</label>
                    <br />
                    <input type="radio" name="4" id="answer3" value="4" />
                    <label for="answer1">Quả đào</label>
            </fieldset>
            <fieldset id="q5">
                <legend>5. Ý thức, cảm giác con người sinh ra và quyết định sự tồn tại của các sự vật.Quan điểm này mang tính chất gì?</legend>
                    <input type="radio"  name="5"  value="1" />
                    <label for="answer1">Duy tâm chủ quan.</label>
                    <br />
                    <input type="radio"  name="5"  value="2" />
                    <label for="answer2">Duy tâm</label>
                    <br />
                    <input type="radio" name="5"  value="3" />
                    <label for="answer3">Duy tâm khách quan.</label>
                    <br />
                    <input type="radio" name="5"  value="4" />
                    <label for="answer4">Duy vật</label>
            </fieldset> 
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="page1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="page2.php" onclick="getData()">2</a></li>
                <li class="page-item"><a class="page-link" href="page2.php" onclick="getData()">Next</a></li>
            </ul>
            </nav>
    </div>
</body>
</html>