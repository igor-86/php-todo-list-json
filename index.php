<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php To do list</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="app">
        <div class="container">
            <h1 class="text-center mb-4">My To do List</h1>

            <div class="row justify-content-center">
                <div class="col-8">
                    <ul>
                        <li v-for="(item,index) in todoList">
                            <h3 @click="toggleTask(index)" :class="{'text-decoration-line-through' : item.done}">{{item.text}}</h3>
                            <i class="fa-solid fa-circle-xmark" @click="removeTask(index)"></i>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Form -->

        </div>
        <div class="form">
            <div class="row justify-content-center">
                <div class="col-12">
                    <input type="text" placeholder="Inserisci nuova attività" class="form-control" v-model="newTodos">
                    <button class="btn btn-primary mt-3" @click="addTodos">Inserisci</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>