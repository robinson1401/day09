<script>
var result=[];
function getResult() {
    if (result.length<5) {
    for (let i=1;i<=5;++i) {
        let rates=document.querySelector(`input[name='${i}']:checked`) ;
        result.push((rates!=null) ? rates.value : '0');
    }
    }
    console.log(result);
    cookie=document.cookie.split(';');
    newCk=cookie[0].split(',').concat(result);
    document.cookie=newCk;
}
</script>
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

<body>
    <div id='contain'>
            <fieldset id="q1">
              <legend>6. Ý thức, ý niệm tuyệt đối sinh ra thế giới, đây là quan điểm gì?</legend>
                  <input type="radio" name="1" id="answer1" value="1" />
                  <label for="answer1">Duy vật</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="2" />
                  <label for="answer1">Duy tâm chủ quan</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="3" />
                  <label for="answer1">Duy tâm</label>
                  <br/>
                  <input type="radio" name="1" id="answer1" value="4" />
                  <label for="answer1">Duy tâm khách quan</label>
                  <br/>
            </fieldset>  
            <fieldset id="q2">
                <legend>7. Triết học là gì?</legend>
                    <input type="radio" name="2" id="answer3" value="1" />
                    <label for="answer1">Triết học là tri thức về thế giới tự nhiên</label>
                    <br />
                    <input type="radio" name="2" id="answer4" value="2" />
                    <label for="answer2">Triết học là tri thức về tự nhiên và xã hội</label>
                    <br />
                    <input type="radio" name="2" id="answer3" value="3" />
                    <label for="answer1">Triết học là tri thức lý luận về con người về vật chất</label>
                    <br />
                    <input type="radio" name="2" id="answer3" value="4" />
                    <label for="answer1">Triết học là hệ thống lý luận chung nhất của con người về thế giới và vị trí con người</label>
            </fieldset>
            <fieldset id="q3">
                <legend>8. Triết học ra đời trong điều kiện nào?</legend>
                    <input type="radio" name="3" id="answer3" value="1" />
                    <label for="answer1">Xã hội phân chia thành giai cấp.</label>
                    <br />
                    <input type="radio" name="3" id="answer4" value="2" />
                    <label for="answer2">Xuất hiện tầng lớp lao động trí óc.</label>
                    <br />
                    <input type="radio" name="3" id="answer3" value="3" />
                    <label for="answer1">Tư duy của con người đạt trình độ tư duy khái quát cao và xuất hiện tầng lớp lao động trí thức.</label>
                    <br />
                    <input type="radio" name="3" id="answer3" value="4" />
                    <label for="answer1">Xuất hiện giai cấp tư sản.</label>
            </fieldset>
            <fieldset class="q4">
                <legend>9. Thời kỳ phục hưng là thời kỳ quá độ từ hình thái kinh tế xã hội nào sang hình thái kinh tế-xã hội nào?</legend>
                    <input type="radio" name="4" id="answer3" value="1" />
                    <label for="answer1">Từ hình thái kinh tế - xã hội chiếm hữu nô lệ sang hình thái kinh tế - xã hội phong kiến</label>
                    <br />
                    <input type="radio" name="4" id="answer4" value="2" />
                    <label for="answer2">Từ hình thái kinh tế - xã hội phong kiến sang hình thái kinh tế - xã hội tư bản chủnghĩa</label>
                    <br />
                    <input type="radio" name="4" id="answer3" value="3" />
                    <label for="answer1">Từ hình thái kinh tế - xã hội TBCN sang hình thái kinh tế - xã hội XHCN</label>
                    <br />
                    <input type="radio" name="4" id="answer3" value="4" />
                    <label for="answer1">Từ hình thái kinh tế - xã hội CSNT hình thái kinh tế - xã hội XHCN.</label>
            </fieldset>
            <fieldset id="q5">
                <legend>10. Những nhà triết học nào xem thường kinh nghiệm, xa rời cuộc sống?</legend>
                    <input type="radio"  name="5"  value="1" />
                    <label for="answer1">Chủ nghĩa kinh nghiệm</label>
                    <br />
                    <input type="radio"  name="5"  value="2" />
                    <label for="answer2">Chủ nghĩa duy vật biện chứng</label>
                    <br />
                    <input type="radio" name="5"  value="3" />
                    <label for="answer3">Chủ nghĩa kinh viện</label>
                    <br />
                    <input type="radio" name="5"  value="4" />
                    <label for="answer4">Chủ nghĩa duy vật siêu hình</label>
        </fieldset>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="page1.php">Previous</a></li>
                <li class="page-item"><a class="page-link" href="page1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="page2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="page3.php">Next</a></li>
            </ul>
            </nav>
        <div class="submit">
            <a href='score.php' onclick="getResult()"> Nộp bài </a>
        </div>
    </div>
</body>
</html>