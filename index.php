<?php
    include_once('./Partials/header.php');
?>

    <section class="d-flex justify-content center border-10px width: 18rem" id="chat">
    </section>

    <main class= "container-md">
        <div class="mt-4 mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Boîte de dialogue</label>
            <div class="card" style="height: 35rem;">
                <div class="card-body">
                <?php 
                    foreach ($messages as $message){
                    echo $message['content'] . "<br>";
                    }

                    foreach ($times as $time){
                        echo $time['created_at'] . "<br>";
                        }
                ?>
                </div>
            </div>
        </div>

        <form action="./Process/add-user.php" method="post" class="d-flex mt-3" role="submit">
          <input class="form-control me-2" type="text" placeholder="Your pseudo" id="pseudo" name="pseudo" required>
          <input class="form-control me-2" type="text" placeholder="Your text" id="message" name="message" required>
          <button class="btn btn-outline-success" type="submit">Send</button>
        </form>
    </main>

<?php
    include_once('./Partials/footer.php');

?>