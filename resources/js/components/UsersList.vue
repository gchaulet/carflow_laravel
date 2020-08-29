<template>
    <vue-good-table
            :columns="columns"
            :rows="users"
            :search-options="{ 
                enabled: true,
                trigger: 'enter',
                   }"
            :pagination-options="{enabled: true}"
            :line-numbers="true">
        <template slot="table-row" slot-scope="props">
            <span v-if="props.column.field === 'first_name'">
                {{props.row.first_name}}
            </span>
             <span v-if="props.column.field === 'last_name'">
                {{props.row.last_name}}
            </span>
            <span v-else-if="props.column.field === 'email'">
                {{props.row.email}}
            </span>
            <span v-else-if="props.column.field === 'show'">
                 <a :href="`/user/show/${props.row.id}`"><span class="badge badge-info">Show</span></a>
            </span>
            <span v-else-if="props.column.field === 'phone'">
                 {{props.row.phone}}
            </span>
            <span v-else-if="props.column.field === 'delete'">
                <a :href="`/user/delete/${props.row.id}`"><span class="badge badge-danger">Delete</span></a>
            </span>
            <span v-else>
                {{ props.formattedRow[props.column.field] }}
            </span>
        </template>
    </vue-good-table>
</template>

<script>
    import { VueGoodTable } from 'vue-good-table';

    export default {
        props: ['users'],
        components: {
            VueGoodTable,
        },
        data(){
            return {
                columns: [
                    {
                        label: 'First Name',
                        field: 'first_name',
                    },
                    {
                        label: 'Last Name',
                        field: 'last_name',
                    },
                    {
                        label: 'Email',
                        field: 'email',
                    },
                    {
                        label: 'Phone',
                        field: 'phone',
                    },
                    {
                        label: 'Show',
                        field: 'show',
                    },
                    
                    {
                        label: 'Delete',
                        field: 'delete',
                    },
                ],
            }
        },
         mounted: function () {
            console.log('done');
        }
    };
</script>