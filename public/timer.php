<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Freshman Pomodoro Clock Demo</title>
  <!--  <link rel="stylesheet" href="https://freshman-pomodoro.surge.sh/styles.css" /> -->
  <style>
    #timer_table{
      background-color: black;
      color: white;
      border-collapse: collapse;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 120%;
      padding: 0px;
      margin: 0px;
    }
    #timer_table td{
      padding: 5px;
    }
  </style>
</head>
<body>
  <main class="app">
    <!-- <progress id="js-progress" value="0"></progress> -->
    <!-- <div class="progress-bar"></div> -->
    <div class="timer">
      <div class="button-group mode-buttons" id="js-mode-buttons">

        <!--
          <button
            data-mode="pomodoro"
            class="button active mode-button"
            id="js-pomodoro"
          >
            Pomodoro
          </button>
        -->

        <!--
          <button
            data-mode="shortBreak"
            class="button mode-button"
            id="js-short-break"
          >
            Short break
          </button>
          -->
        <!--
          <button
            data-mode="longBreak"
            class="button mode-button"
            id="js-long-break"
          >
            Long break
          </button>
          -->
      </div>
      <table id="timer_table">
        <tr>
          <td>
            <div class="clock" id="js-clock">
              <span id="js-minutes">25</span>
              <span class="separator">:</span>
              <span id="js-seconds">00</span>
            </div>
          </td>
          <td> <button class="main-button" data-action="start" id="js-btn">
              Start
            </button></td>
        </tr>
      </table>
    </div>
  </main>
  <div class="hidden">
    <audio src="https://freshman-pomodoro.surge.sh/backtowork.mp3" data-sound="pomodoro"></audio>
    <audio src="https://freshman-pomodoro.surge.sh/break.mp3" data-sound="shortBreak"></audio>
    <audio src="https://freshman-pomodoro.surge.sh/break.mp3" data-sound="longBreak"></audio>
  </div>
  <script src="https://freshman-pomodoro.surge.sh/main.js"></script>
</body>

</html>