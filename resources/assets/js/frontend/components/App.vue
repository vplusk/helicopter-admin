<template>    
    <nav-menu></nav-menu>    
</template>

<script>    
    import NavMenu from './shared/NavMenu.vue';
    export default {

        name: 'app',
        mounted() {
            console.log('Component mounted.')
        },
        components: {
          NavMenu
        }
        
                
    }
</script>
