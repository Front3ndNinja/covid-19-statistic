<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$country = 'bangladesh';
curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/' . urlencode($country));
$result = curl_exec($ch);
$data = json_decode($result, true);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>COVID-19 Statistics of Bangladesh</title>
        <link rel="shortcut icon" href="img/favicon.jpg"> </head>

    <body>
        <!-- header start -->
        <header>
            <div class="overlay">
                <h1 class="text-center">COVID-19 Statistics <br> of Bangladesh</h1> </div>
        </header>
        <br>
        <!-- header end -->
        <section>
            <div class="container">
                <div class="row" style="margin-left: 14.5%;">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title">Infected:
                            <?php echo number_format($data['confirmed']['value']) ?>
                            </h5> </div>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title">Recovered:
                            <?php echo number_format($data['recovered']['value']) ?>
                            </h5> </div>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title">Death(s):
                            <?php echo number_format($data['deaths']['value']) ?>
                            </h5> </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class = "row">
                    <div class="col-md-12 text-center">
                    <h4 class="text-danger margin-top-bottom">করোনা ঠেকাতে বাসাতে থাকুন</h3>

                        <img class="img-fluid " src="img/corona.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="safe">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="text-center margin-top-bottom">করোনা ভাইরাস প্রতিরোধের উপায়</h3>
                        <ul>
                            <li> ১. বার বার সাবান ও পানি দিয়ে হাত ধুবেন (প্রতিবারে ২০ সেকেন্ডের বেশি)  <a href="https://www.youtube.com/watch?v=L-QWAi6n1Bk">হাত ধোয়ার সঠিক নিয়ম শিখুন</a></li>
                            <li> ২. প্রয়োজনে স্যানিটাইজার ব্যবহার করতে পারেন </li>
                            <li> ৩. জরুরি প্রয়োজন ব্যতিরেকে জনসমাগম এড়িয়ে চলুন, বেশিরভাগ সময় বাড়িতে থাকার চেষ্টা করুন </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-12 text-center">
                    <h3 class="margin-top-bottom"> আপনি কি করোনা ভাইরাসে ( কোভিড-১৯) আক্রান্ত ? </h3>
                    <button class="submit"onclick="myFunction()">পরীক্ষা করুন</button>
                    </div>
                    <div class="col-md-12 quiz" id = "quizHide">
                        
                        <div id="quiz"></div>
                        <div id="results">
                            <div class="test">
                                
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="submit" id="submit">ফলাফল</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <footer class="margin-top-bottom">
            <div class="container">
                <div class="row">
                    <p class="card-text"> <small>
                        Last updated : <?php echo $data['lastUpdate'] ?> ago
                        </small> </p>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/quiz.js"></script>
        <script>
            function myFunction() {
  var x = document.getElementById("quizHide");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
        </script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>