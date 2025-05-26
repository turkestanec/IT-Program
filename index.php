<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IT Proger платформасы</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      font-family: Arial, Helvetica, sans-serif;
    }

    .header {
      background: rgb(33, 150, 83);
      padding: 30px 0;
      text-align: center;
      color: black;
    }

    .navbar a {
      margin: 0 7px;
      background-color: white;
      padding: 10px 55px;
      border-radius: 5px;
      color: #212529;
    }

    .home .box {
      background: linear-gradient(90deg, rgba(23, 162, 184, 0.07) 0%, rgba(23, 162, 184, 0.13) 35%, rgba(23, 162, 184, 0.21) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 150px 0;
    }

    .box .left, .box .right {
      width: 50%;
    }

    .right {
      text-align: center;
    }

    .right h1 {
      font-size: 25px;
      font-weight: bolder;
      color: #219653;
    }

    .left img {
      width: 314px;
      height: 235px;
    }

    hr {
      margin: 1rem 0;
      background-color: currentColor;
      border: 0;
      height: 1px;
      opacity: .25;
    }

    .txt {
      background-color: #fff;
      margin-left: 350px;
    }

    .txt p {
      font-weight: bold;
      font-size: 16px;
      margin: 10px 0;
      color: #6c757d;
    }

    .txt .txt20 {
      font-size: 20px;
      margin-left: 10px;
    }

    .thr-box {
      background: linear-gradient(90deg, rgba(23, 162, 184, 0.07) 0%, rgba(23, 162, 184, 0.13) 35%, rgba(23, 162, 184, 0.21) 100%);
      padding: 10px 93px;
      display: flex;
      justify-content: center;
      width: 90%;
      margin: auto;
    }

    .thr-box .w-bx {
      margin: 10px;
      width: 25%;
    }

    .w-bx p {
      background-color: #219653;
      color: #fff;
      padding: 8px 16px;
    }

    .pad16 {
      background-color: #fff;
      color: #212529;
      padding: 16px;
    }

    .course h1 {
      color: #6c757d;
      margin-left: 280px;
    }

    .c-bx {
      display: flex;
      justify-content: space-evenly;
      width: 80%;
      margin: auto;
    }

    .course-bx {
      width: 21%;
      border: 1px solid black;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 12px;
      padding: 10px;
    }

    .course-bx img {
      width: 120px;
      height: 120px;
    }

    .course-bx h3 {
      font-size: 20px;
      color: #6c757d;
      margin: 10px 0;
    }

    .course-bx button {
      padding: 6px 12px;
      font-size: 16px;
      color: #fff;
      background-color: #219653;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .modal {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 100;
    }

    .modal.show {
      display: flex;
    }

    .modalka-bx {
      width: 900px;
      height: 600px;
      background-color: #fff;
      border-radius: 10px;
      padding: 30px 20px;
      position: relative;
    }

    .modalka-bx img {
      width: 400px;
      display: block;
      margin: 50px auto;
    }

    .modal-btn {
      color: #fff;
      background-color: #219653;
      padding: 5px 10px;
      position: absolute;
      top: 20px;
      right: 20px;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <header class="header">
    <nav class="navbar">
      <a href="#home">Басты бет</a>
      <a href="#about">Біз жайлы</a>
      <a href="#course">Курстар</a>
      <a href="#books">Кітаптар</a>
      <a href="#contact">Байланыс</a>
      <a href="register.php">Кіру</a>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="box">
      <div class="right">
        <h1>Қашықтықтан сапалы және заманауи білім беру платформасы</h1>
        <hr>
        <h1>Бізбен бірге үйрену оңай!</h1>
      </div>
      <div class="left">
        <img src="https://prog-bilim.kz/img/1.png" alt="platforma" />
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="txt">
      <p>Біздің мақсат:</p>
      <p class="txt20">қашықтықтан сапалы және заманауи білім беру</p>
    </div>
    <div class="thr-box">
      <div class="w-bx">
        <p class="bor">Жеке кабинет</p>
        <p class="pad16">Курс бойынша өтілетін барлық сабақтарға мүмкіндік ашылады.</p>
      </div>
      <div class="w-bx">
        <p class="bor">Видео-сабақтар</p>
        <p class="pad16">Әр тақырыпқа сай видео-сабақтар және теориялық мәліметтер ұсынылады.</p>
      </div>
      <div class="w-bx">
        <p class="bor">Практика</p>
        <p class="pad16">Тақырыпты бекіту мақсатында практикалық және тест тапсырмалары беріледі.</p>
      </div>
    </div>
  </section>

  <section class="course" id="course">
    <br><br>
    <h1>Курстар тізімі:</h1>
    <hr>
    <div class="c-bx">
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/python.png" alt="python" />
        <h3>Python</h3>
        <button onclick="showModal('python')">Толығырақ</button>
      </div>
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/cplusplus.png" alt="cpp" />
        <h3>C++</h3>
        <button onclick="showModal('cplusplus')">Толығырақ</button>
      </div>
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/csharp.png" alt="csharp" />
        <h3>C#</h3>
        <button onclick="showModal('csharp')">Толығырақ</button>
      </div>
    </div>

    <br><br>

    <div class="c-bx">
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/htmlcss.png" alt="htmlcss" />
        <h3>HTML/CSS</h3>
        <button onclick="showModal('htmlcss')">Толығырақ</button>
      </div>
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/Scratch.png" alt="scratch" />
        <h3>Scratch</h3>
        <button onclick="showModal('scratch')">Толығырақ</button>
      </div>
      <div class="course-bx">
        <img src="https://prog-bilim.kz/img/phpmysql.png" alt="phpmysql" />
        <h3>PHP/SQL</h3>
        <button onclick="showModal('phpmysql')">Толығырақ</button>
      </div>
    </div> 
    <br><br>
<div class="c-bx">
    <div class="course-bx">
  <img src="https://prog-bilim.kz/img/PS.png" alt="photoshop" />
  <h3>Photoshop</h3>
  <button onclick="showModal('photoshop')">Толығырақ</button>
</div>
<div class="course-bx">
  <img src="https://prog-bilim.kz/img/pedagog.png" alt="pedagog" />
  <h3>Педагог</h3>
  <button onclick="showModal('pedagog')">Толығырақ</button>
</div>
<div class="course-bx">
  <img src="https://prog-bilim.kz/img/flash.png" alt="oqulyq" />
  <h3>Оқулық</h3>
  <button onclick="showModal('oqulyq')">Толығырақ</button>
</div>
</div>
  </section>

  <section class="modal" id="myModal">
    <div class="modalka-bx">
      <a href="#" class="modal-btn" onclick="hideModal()">Шығу</a>
      <img id="modalImage" src="" alt="Course Image" />
    </div>
  </section>

  <section class="books" id="books">
    <br><br>
    <h1>Кітаптар тізімі:</h1>
    <hr>
    <div class="c-bx">
      <div class="course-bx">
        <div class="image-bx">
          <h3>Delphi бағдарламалау ортасы</h3>
          </div>
        <div class="image-bx">
        <img src="https://prog-bilim.kz/img/1.jpg" alt="python" />
        </div>
      
      </div>

     <div class="course-bx">
       <div class="image-bx">
       <img src="https://prog-bilim.kz/img/2.jpg" alt="python" />
       </div>
        <div class="image-bx">
          <h3>VS C# бағдарламалау ортасы</h3>
          </div>
      
      </div>
    
    </div>
<br>

       <div class="c-bx">
      <div class="course-bx">
        <div class="image-bx">
          <h3>VS C# бағдарламалау ортасы <br>бойынша электронды оқулық</h3>
          </div>
        <div class="image-bx">
        <img src="https://prog-bilim.kz/img/3.jpg" alt="python" />
        </div>
      
      </div>

     <div class="course-bx">
       <div class="image-bx">
       <img src="https://prog-bilim.kz/img/4.jpg" alt="python" />
       </div>
        <div class="image-bx ">
          <h3>Python кітабы<br>Кітап+QR <br>Кітап+QR+Диск</h3>
          </div>
      
      </div>
    
    </div>
    
  <br>

       <div class="c-bx">
      <div class="course-bx">
        <div class="image-bx">
          <h3>VS C# бағдарламалау ортасы <br>бойынша электронды оқулық</h3>
          </div>
        <div class="image-bx">
        <img src="https://prog-bilim.kz/img/3.jpg" alt="python" />
        </div>
      
      </div>

     <div class="course-bx">
       <div class="image-bx">
       <img src="https://prog-bilim.kz/img/4.jpg" alt="python" />
       </div>
        <div class="image-bx ">
          <h3>Python кітабы<br>Кітап+QR <br>Кітап+QR+Диск</h3>
          </div>
      
      </div>
    
    </div>
    <br>
    <div class="c-bx">
      <div class="course-bx">
        <div class="image-bx">
          <h3>Delphi бағдарламалау ортасы</h3>
          </div>
        <div class="image-bx">
        <img src="https://prog-bilim.kz/img/1.jpg" alt="python" />
        </div>
      
      </div>

     <div class="course-bx">
       <div class="image-bx">
       <img src="https://prog-bilim.kz/img/2.jpg" alt="python" />
       </div>
        <div class="image-bx">
          <h3>VS C# бағдарламалау ортасы</h3>
          </div>
      
      </div>
    
    </div>
<br><br>

  </section>

   <section class="about" id="about">
    <div class="txt">
      <p>Біздің мақсат:</p>
      <p class="txt20">қашықтықтан сапалы және заманауи білім беру</p>
    </div>
   
  </section>



  <script>
    function showModal(course) {
      const imageMap = {
        python: "https://prog-bilim.kz/img/python.png",
        cplusplus: "https://prog-bilim.kz/img/cplusplus.png",
        csharp: "https://prog-bilim.kz/img/csharp.png",
        htmlcss: "https://prog-bilim.kz/img/htmlcss.png",
        scratch: "https://prog-bilim.kz/img/Scratch.png",
        phpmysql: "https://prog-bilim.kz/img/phpmysql.png",
        photoshop: "https://prog-bilim.kz/img/PS.png",
        pedagog: "https://prog-bilim.kz/img/pedagog.png",
        oqulyq: "https://prog-bilim.kz/img/flash.png"
      };

      document.getElementById("modalImage").src = imageMap[course] || "";
      document.getElementById("myModal").classList.add("show");
    }

    function hideModal() {
      document.getElementById("myModal").classList.remove("show");
    }

  
</script>
</body>
</html>
