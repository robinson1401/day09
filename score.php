<!doctype html>
<html lang="en">
    <script>
        notice='';
        window.onload= function() {
            console.log(document.cookie);
            result=['2','1','4','3','1','4','4','3','2','3'];
            answer=document.cookie.split(';');
            answer=answer[0].split(',');
            let count=0;
            for(let i=0;i<10;++i) {
                if(answer[i]==result[i]) {
                    count++;
                }
            }
            if (count<4) {
                notice="<h2 style='padding-left:10%'>Bạn không đủ điểm để qua môn, chuẩn bị tiền học lại đi</h2>";
            } else if (count>=4 && count<=7) {
                notice="<h2 style='padding-left:10%'>Học như này thì chuẩn bị tiền học cải thiện đi</h2>";
            } else {
                notice="<h2 style='padding-left:10%'>Sắp ra trường được rồi đấy</h2>";
            }
            document.write(`<h1 style='padding-left:10%'>${count} điểm</h1>`);
            document.write(notice);
        }
        
    </script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Score</title>
</head>
<body>
    <h1> Kết quả </h1>
</body>
</html>