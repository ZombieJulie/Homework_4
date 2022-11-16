<?php
$skillsArray = [
  ["skill" => "Охота", "percent" => 75],
  ["skill" => "Мурчание", "percent" => 100],
  ["skill" => "Вылизывание", "percent" => 60],
  ["skill" => "Скидывание предметов", "percent" => 50],
];

$experience = [
  [
    "work" => "Мышелов",
    "startWork" => "Сентябрь 2022",
    "endWork" => "Настоящее время",
    "description" => "Успешно демонстрирую навык мышеловства. Имею 3 успешных кейса в портфолио.",
  ],
  [
  "work" => "Шуршатель фантиком",
  "startWork" => "Октябрь 2021",
  "endWork" => "Сентрябрь 2022",
  "description" => "С любовью выполнял свою обязанность до перевода в новый отдел.",
  ],
  [
    "work" => "Полировщик бубенцов",
    "startWork" => "Июль 2021",
    "endWork" => "Март 2022",
    "description" => "Полировал бубенцы с их появления по март 2022 года. Был отстранен от этой должности в связи с их удалением.",
  ],
  [
  "work" => "Мурчало",
  "startWork" => "Май 2021",
  "endWork" => "Сентябрь 2022",
  "description" => "Успокаиваю нервы и лечу стресс своим мурчанием с самого рождения. Также усыпляю бдительность.",
  ],
];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Брыська</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Котя</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Москва, Россия</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>littleballoffur@warmkitty.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+123-45-67</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count ($skillsArray); $i++): ?>
          <p><?php echo $skillsArray[$i]['skill']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skillsArray[$i]['percent']; ?>%"><?php echo $skillsArray[$i]['percent']; ?>%</div>
          </div>
          <?php endfor; ?>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

        <?php for ($i = 0; $i < count($experience); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $experience[$i]['work']; ?></b></h5>
            <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?php echo $experience[$i]['startWork']; ?> - 
                <?php if (i == 0): ?>
                    <span class="w3-tag w3-teal w3-round">
                        <?php echo $experience[$i]['endWork']; ?>
                    </span>
                <?php else: ?>
                    <?php echo $experience[$i]['endWork']; ?>
                <?php endif; ?>
            </h6>
            <p><?php echo $experience[$i]['description']; ?></p>
            <hr>
          </div>
        <?php endfor; ?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Purring School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2021</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hunting School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2021 - 2022</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
