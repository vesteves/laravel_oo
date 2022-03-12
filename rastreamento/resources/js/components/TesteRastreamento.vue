<template>
    <div>
        <div>{{ hello }}</div>
        <div v-for="categoria in categorias" :key="categoria.id">
            <div>{{ categoria }}</div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["categorias"],
    data() {
        return {
            hello: "Olá Vue!!!",
        };
    },
};
</script>
