<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <ul>
                        <li v-for="items in table" v-bind:key="items.id">
                                {{ items.nombre }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import Vue from 'vue'
    import axios from 'axios'
    export default {
        data: {
            bus = new Vue(),
            table:[]
        },
        mounted() {
            this.getTable();
            this.bus.$on("closeDialog", () => {
                this.getTable();
            });
            
            console.log('Component mounted.')
        },
        methods: {
            async getTable() {
                try {
                    let res = await axios.get("api/alumno")
                    console.log(res)
                    this.table = res.data
                } catch (e) {
                    console.log(e)
                }
            }, 
        }
    }
</script>
