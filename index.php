<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo with API</title>
</head>

<body>
    <div id="app">
    <div class="mainContainer pt-3 d-flex flex-column align-items-center">
            <h1>To-Do List</h1>
            <div class="todoListContainer p-3">
                <div class="d-flex align-items-center  justify-content-between" >
                    <input name="task" class="rounded border border-dark ps-2"
                        type="text" placeholder="Aggiungi Task" v-model="task">
                        <button class="btn btn-primary ms-3 p-1" @click="callApi()">Aggiungi Task</button>

                    <button class="btn btn-primary ms-3 p-1" @click="addTask()">Aggiungi Task 2</button>
                </div>
                <ul class="mt-3 ps-0">
                    <template v-for="(task, i) in lista">
                        <div class="d-flex align-items-center justify-content-between mt-3 line">
                            <div>
                                <li :class="task.done == true ? `done` : ``" class="styleNone"
                                    @click="changeTaskState(task)">{{task.task}}</li>
                            </div>
                            <div>
                                <button class="btn btn-danger p-1 ms-3 ps-2 pe-2 h-75">X</button>
                            </div>
                        </div>
                    </template>
                </ul>

            </div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>