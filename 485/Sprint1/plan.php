<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
      <meta charset="UTF-8">
      <title>Title</title>
      <script src="scripts/token.js"></script>
        <link rel="stylesheet" href="styles/plan.css">
  </head>
  <body>
<div class="token-generate">
    <h1 id="quarter">Quarter Classes Planning</h1>

    <?php

    function IdGenerator($length = 6) {
        $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
        $strlen = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $strlen - 1)];
        }
        return $randomString;
    }
    echo "Your personal ID: ".IdGenerator();

    ?>

</div>

  <div class="container my-container">
            <form>
                <div class="fall-plan">
                    <h1>Fall Planning</h1>
                    <div class="form-group" id="mail">
                        <label for="studentEmail">Student Email Address</label>
                         <br>
                        <input type="email" class="form-control" id="studentEmail" placeholder="@student.greenriver.edu">
                    </div>
                    <div class="form-group">
                        <label for="classTake">How many classes do you want to take</label>
                        <br>
                        <select class="form-control" id="classTake">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="class-planning" id="classPlan">Class Planning</label>
                        <br>
                        <textarea class="form-control" id="class-planning" rows="15" cols="60"></textarea>
                    </div>

                    <button type="submit">Save the plan</button>
                </div>
            </form>
            <form>
                <div class="winter-plan">
                    <h1>Winter Planning</h1>
                    <div class="form-group" id="mail">
                        <label for="studentEmail">Student Email Address</label>
                        <br>
                        <input type="email" class="form-control" id="studentEmail" placeholder="@student.greenriver.edu">
                </div>
                <div class="form-group">
                        <label for="classTake">How many classes do you want to take</label>
                        <br>
                        <select class="form-control" id="classTake">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                </div>
            <div class="form-group">
                <label for="class-planning" id="classPlan">Class Planning</label>
                <br>
                <textarea class="form-control" id="class-planning" rows="15" cols="60"></textarea>
            </div>
            <button type="submit">Save the plan</button>

            </div>
            </form>
  </div>


  <div class="container my-container-second-row">
      <form>
          <div class="spring-plan">
              <h1>Spring Planning</h1>
              <div class="form-group" id="mail">
                  <label for="studentEmail">Student Email Address</label>
                  <br>
                  <input type="email" class="form-control" id="studentEmail" placeholder="@student.greenriver.edu">
              </div>
              <div class="form-group">
                  <label for="classTake">How many classes do you want to take</label>
                  <br>
                  <select class="form-control" id="classTake">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="class-planning" id="classPlan">Class Planning</label>
                  <br>
                  <textarea class="form-control" id="class-planning" rows="15" cols="60"></textarea>
              </div>

              <button type="submit">Save the plan</button>
          </div>

      </form>

      <form>
          <div class="summer-plan">
              <h1>Summer Planning</h1>
              <div class="form-group" id="mail">
                  <label for="studentEmail">Student Email Address</label>
                  <br>
                  <input type="email" class="form-control" id="studentEmail" placeholder="@student.greenriver.edu">
              </div>
              <div class="form-group">
                  <label for="classTake">How many classes do you want to take</label>
                  <br>
                  <select class="form-control" id="classTake">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="class-planning" id="classPlan">Class Planning</label>
                  <br>
                  <textarea class="form-control" id="class-planning" rows="15" cols="60"></textarea>
              </div>

              <button type="submit">Save the plan</button>
          </div>

      </form>
  </div>

  </body>

</html>
