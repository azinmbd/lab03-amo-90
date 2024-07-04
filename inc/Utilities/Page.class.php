<?php

class Page {

    private static string $title = "Dog Adaptation";
    private static string $formTitle = "Lab03 - Azin Mobedmehdiabadi - 300365490";

    Static function header() { ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php echo self:: $title ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
        <body>
            <div class="Container pt-5">
                <div class="row pt-5">
                    <div class="col"></div>
                    <div class="col-8 ">
    <?php }

    static function formTitle() { 
       echo "<p class='h2'>" . self::$formTitle, "</p>";
    }

    static function petForm($errors) { 
        $userEmail = isset($_POST['userEmail']) ? htmlspecialchars($_POST['userEmail']) : '';
        $dogType = isset($_POST['dogType']) ? htmlspecialchars($_POST['dogType']) : '';
        $dogAge =  isset($_POST['dogAge']) ? (int)$_POST['dogAge'] : 5;
        $isMale = isset($_POST['gender']) && $_POST['gender'] == 'male' ? 'checked' : 'checked'; 
        $isFemale = isset($_POST['gender']) && $_POST['gender'] == 'female' ? 'checked' : ''; 
        $isBlack = isset($_POST['colors']) && in_array('black', $_POST['colors']) ? 'checked' : ''; 
        $isBrown = isset($_POST['colors']) && in_array('brown', $_POST['colors']) ? 'checked' : ''; 
        $isWhite = isset($_POST['colors']) && in_array('white', $_POST['colors']) ? 'checked' : ''; 
        $isGolden = isset($_POST['colors']) && in_array('golden', $_POST['colors']) ? 'checked' : '';
        $pickupDate = isset($_POST['pickupDate']) ? htmlspecialchars($_POST['pickupDate']) : '2024-02-01';
        
        ?>
                    <form action="" method="POST" class="border border-success-subtle rounded p-5">
                        <ul>
                            <li>Please provide a valid email for the adaptation.</li>
                        </ul>
                        <div class="mb-3">
                            <div class="row">
                                <label class="form-label col-3">Property</label>
                                <label class="form-label col">Value</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label for="userEmail" class="form-label col-3">Your email:</label>
                                <input type="text" class="form-control col" name="userEmail" value="<?php echo $userEmail; ?>">
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['userEmail'])) {
                                echo '<div class="text-danger">' . $errors['userEmail'] . '</div>';
                            }
                        ?>
                        <div class="mb-3">
                            <div class="row">
                                <label for="dogType" class="form-label col-3">Dog breed:</label>
                                <select class="form-select col" name="dogType">
                                    <option selected value="Chihuahua">Chihuahua</option>
                                    <option value="Golden Retriever">Golden Retriever</option>
                                    <option value="Pug">Pug</option>
                                    <option value="Labrador">Labrador</option>
                                    <option value="Poodle">Poodle</option>
                                </select>
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['dogType'])) {
                                echo '<div class="text-danger">' . $errors['dogType'] . '</div>';
                            }
                        ?>
                        <div class="mb-3">
                            <div class="row">
                                <label for="dogAge" class="form-label col-3">Dog Age: (1-10yrs)</label>
                                <input type="range" class="form-range col" min="0" max="17" value="<?php echo $dogAge; ?>" name="dogAge">
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['dogAge'])) {
                                echo '<div class="text-danger">' . $errors['dogAge'] . '</div>';
                            }
                        ?>
                        <div class="mb-3">
                            <div class="row">
                                <label for="gender" class="form-label col-3">Gender:</label>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="male" <?php echo $isMale; ?>>
                                        <label class="form-check-label" for="maleRadio">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="female" <?php echo $isFemale; ?>>
                                        <label class="form-check-label" for="femaleRadio">Female</label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['gender'])) {
                                echo '<div class="text-danger">' . $errors['gender'] . '</div>';
                            }
                        ?>
                        <div class="mb-3">
                            <div class="row">
                                <label for="colors" class="form-label col-3">Preferred Colors:</label>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="colors[]" value="black" <?php echo $isBlack; ?>>
                                        <label class="form-check-label" for="blackCheckbox">Black</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="colors[]" value="brown" <?php echo $isBrown; ?>>
                                        <label class="form-check-label" for="brownCheckbox">Brown</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="colors[]" value="white" <?php echo $isWhite; ?>>
                                        <label class="form-check-label" for="whiteCheckbox">White</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="colors[]" value="golden" <?php echo $isGolden; ?>>
                                        <label class="form-check-label" for="goldenCheckbox">Golden</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['colors'])) {
                                echo '<div class="text-danger">' . $errors['colors'] . '</div>';
                            }
                        ?>
                        <div class="mb-3">
                            <div class="row">
                                <label for="pickupDate" class="form-label col-3">Pickup Date</label>
                                <input type="date" class="form-control col" name="pickupDate" value="<?php echo $pickupDate; ?>">
                            </div>
                        </div>
                        <?php 
                            if (isset($errors['pickupDate'])) {
                                echo '<div class="text-danger">' . $errors['pickupDate'] . '</div>';
                            }
                        ?>
                        <button type="submit" class="btn btn-primary">Submit your request</button>
                    </form>
    <?php }

    static function showConfirmation(Dog $adopationDetail) { 
        ?>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Property</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $adopationDetail -> getUserEmail(); ?></td>
                </tr>
                <tr>
                    <td>Dog Type:</td>
                    <td><?php echo $adopationDetail -> getDogType(); ?></td>
                </tr>
                <tr>
                    <td>Dog Age:</td>
                    <td><?php echo $adopationDetail -> getDogAge(); ?></td>
                </tr>
                <tr>
                    <td>Dog gender:</td>
                    <td><?php echo $adopationDetail -> getGender(); ?></td>
                </tr>
                <tr>
                    <td>Prefered color:</td>
                    <td><?php 
                        $colors = $adopationDetail -> getColors(); 
                        for ($i=0; $i <count($colors) ; $i++) { 
                            echo $colors[$i] . " ";
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Pickup Date:</td>
                    <td><?php echo $adopationDetail -> getPickupDate(); ?></td>
                </tr>
            </tbody>
        </table>
    <?php }

    static function footer() { ?>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
        </html>        
    <?php }
}


?>