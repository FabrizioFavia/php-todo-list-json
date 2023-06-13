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
        <div class="container-lg d-flex flex-column">
            <div>
                <ul>
                    <template v-for="(task, i) in lista">
                        <li @click="changeTaskState(task)" :class="task.done==true ? 'done' : '' ">{{task.task}}</li>
                    </template>
                </ul>
            </div>
            <div>
                <button @click="callApi" class="btn btn-primary">VAI</button>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>