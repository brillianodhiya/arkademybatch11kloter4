<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>7b</title>
</head>
<style>
    .ww {
        padding-top: 150px;
    }
</style>

<body>
    <nav class="white">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img
                    src="https://yt3.ggpht.com/-TCAxPj4b4PA/AAAAAAAAAAI/AAAAAAAAAAA/UcBASWF0q0k/nd/photo.jpg" alt=""
                    width="60" height="auto"></a>
        </div>
    </nav>
    <div class="container">
        <div class="row ww">
            <div class="col s11"></div>
            <a class="waves-effect waves-light btn modal-trigger yellow darken-2" href="#add">ADD</a>
            <div id="add" class="modal">
                <div class="modal-content">
                    <h5>ADD DATA</h5>
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nama" id="nama" type="text" class="validate">
                                <label for="nama">Name</label>
                            </div>
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Work ...</option>
                                    <option value="1">Frontend Dev</option>
                                    <option value="2">Backend Dev</option>
                                </select>
                                <label>Pilih Work</label>
                            </div>
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Salary ...</option>
                                    <option value="1">10.000.000</option>
                                    <option value="2">12.000.000</option>
                                </select>
                                <label>Pilih Salary</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="modal-close waves-effect waves-light btn yellow darken-2">ADD</button>
                    </form>
                </div>
            </div>
            <table class="responsive-table highlight col s12">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rebecca</td>
                        <td>Frontend Dev</td>
                        <td>10.000.000</td>
                        <td><a class="waves-effect waves-light btn red accent-3" href="#"><i
                                    class="material-icons">delete</i></a>
                            <a class="waves-effect waves-light btn modal-trigger light-blue lighten-2" href="#edit"><i
                                    class="material-icons">edit</i></a>
                            <div id="edit" class="modal">
                                <div class="modal-content">
                                    <h5>EDIT DATA</h5>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Rebecca" id="nama" type="text" class="validate">
                                                <label for="nama">Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Work ...</option>
                                                    <option value="1">Frontend Dev</option>
                                                    <option value="2">Backend Dev</option>
                                                </select>
                                                <label>Pilih Hobby</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Salary ...</option>
                                                    <option value="1">10.000.000</option>
                                                    <option value="2">12.000.000</option>
                                                </select>
                                                <label>Pilih Salary</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        class="modal-close waves-effect waves-light btn yellow darken-2">EDIT</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Vita</td>
                        <td>Backend Dev</td>
                        <td>12.000.000</td>
                        <td><a class="waves-effect waves-light btn red accent-3" href="#"><i
                                    class="material-icons">delete</i></a>
                            <a class="waves-effect waves-light btn modal-trigger light-blue lighten-2" href="#edit"><i
                                    class="material-icons">edit</i></a>
                            <div id="edit" class="modal">
                                <div class="modal-content">
                                    <h5>EDIT DATA</h5>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Vita" id="nama" type="text" class="validate">
                                                <label for="nama">Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Work ...</option>
                                                    <option value="1">Frontend Dev</option>
                                                    <option value="2">Backend Dev</option>
                                                </select>
                                                <label>Pilih Hobby</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Salary ...</option>
                                                    <option value="1">10.000.000</option>
                                                    <option value="2">12.000.000</option>
                                                </select>
                                                <label>Pilih Salary</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        class="modal-close waves-effect waves-light btn yellow darken-2">EDIT</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('.modal').modal();
    });
    $(document).ready(function () {
        $('select').formSelect();
    });
</script>

</html>