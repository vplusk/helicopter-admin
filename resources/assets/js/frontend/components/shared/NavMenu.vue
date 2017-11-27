<template>
    <div>
        <div class="col col-sm-3 order-1">
            <ul class="nav navbar-nav navbar-right">
                <router-link :to="{name: 'main'}" tag="li" activeClass="active" exact>
                    <a>Main</a>
                </router-link>
                <router-link :to="{name: 'services'}" tag="li" activeClass="active" exact>
                    <a>Services</a>
                </router-link>
                <router-link :to="{name: 'offers'}" tag="li" activeClass="active" exact>
                    <a>Offers</a>
                </router-link>
            </ul>
        </div>
        <div class="col col-sm-9 order-2">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'nav-menu',
    }
</script>
