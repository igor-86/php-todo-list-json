const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            newTodos: "",
        }
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.todoList = resp.data;
            console.log(resp);
        })
    },
    methods: {
        addTodos() {
            const data = {
                newTodos: this.newTodos,
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.todoList = resp.data;
                this.newTodos = "";
                console.log(this.todoList);
            });
        },
        toggleTask(index) {
            const data = {
                doneIndex: index
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.todoList = resp.data;

            });
        },
        removeTask(index) {
            const data = {
                removeIndex: index
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.todoList = resp.data;
            })

        },
    },
}).mount("#app");