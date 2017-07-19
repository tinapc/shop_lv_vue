<template>
    <div class="row">
        <div class="col-sm-6">
            <h3>{{ title }}</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name Product</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Áo thun 1</td>
                        <td>$99</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <product-edit form-title="Form Edit"></product-edit>
        </div>
    </div>
</template>

<script>
    Vue.component('ProductEdit', require('./ProductEdit.vue'));
    export default {
        mounted() {
        },
        data() {
           return {
                'title': this.tableTitle
            }
        },
        props: ['tableTitle']
    }
</script>