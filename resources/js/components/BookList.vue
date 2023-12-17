<template>
    <div>
        <h2 class="bg-red-800">
            Lista de libros
        </h2>
        <ul>
            <li v-for="book in books" :key="book.id">
            {{ book.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            books: [], // Esta línea debe tener un objeto dentro de los paréntesis de retorno.
        };
    },
    mounted() {
        fetch('api/libros')
            .then(response => response.json())
            .then(data => {
                this.books = data;
            });
    }
};
</script>

