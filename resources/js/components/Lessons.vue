<template>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item" v-for="lesson in formattedLessons">
                {{lesson.title}}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['default_lessons'],
        data:function(){
            return{
                lessons: this.default_lessons,
            }
        },
        computed: {
            formattedLessons: function(){
                return JSON.parse(this.lessons)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
