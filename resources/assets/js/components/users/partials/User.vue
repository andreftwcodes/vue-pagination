<template>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="mr-3 mb-4" src="https://via.placeholder.com/64x64" :alt="user.name"></a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                {{ user.name }}
            </h4>
            {{ user.email }}
        </div>
    </div>
</template>

<script>

    export default {
        props: ['user']
    }

</script>
