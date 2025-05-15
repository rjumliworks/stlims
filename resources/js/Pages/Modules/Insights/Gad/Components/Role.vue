<template>
    <div class="card bg-light-subtle shadow-none border">
        <div class="card-header bg-light-subtle">
            <div class="d-flex mb-n3">
                <div class="flex-shrink-0 me-3">
                    <div style="height:2.5rem;width:2.5rem;">
                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                            <i class="ri-team-fill text-primary fs-24"></i>
                        </span>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h5 class="mb-0 fs-14"><span class="text-body">{{year}} Role Distribution</span></h5>
                    <p class="text-muted text-truncate-two-lines fs-12">Identifying gender representation across roles, helping ensure equality and informed decision-making.</p>
                </div>
            </div>
        </div>
        <div class="card bg-white border-bottom shadow-none" no-body>
            <div class="table-responsive" style="max-height: calc(100vh - 300px); overflow: auto;">
                <table class="table table-nowrap table-striped align-middle mb-0">
                    <thead class="table-light thead-fixed">
                        <tr class="fs-11">
                            <th class="text-center" width="25%">Role</th>
                            <th class="text-center">Female</th>
                            <th class="text-center">Male</th>
                            <th class="text-center">% Female</th>
                            <th class="text-center">% Male</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in roles" v-bind:key="index">
                            <td class="text-center">{{ list.role_name }}</td>
                            <td class="text-center">{{ list.female_count }}</td>
                            <td class="text-center">{{ list.male_count }}</td>
                            <td class="text-center">{{ list.female_percentage }}</td>
                            <td class="text-center">{{ list.male_percentage }}</td>
                            <td class="text-center">{{ list.total_users }}</td>
                        </tr>
                    </tbody>
                     <tfoot>
                        <tr class="text-primary text-center fs-12">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>{{ totalUsers }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['y'],
    data(){
        return {
            currentUrl: window.location.origin,
            year: this.y,
            laboratory: null,
            roles: []
        }
    },
    computed: {
        totalMale() {
            return this.roles.reduce((sum, row) => sum + row.male_count, 0);
        },
        totalFemale() {
            return this.roles.reduce((sum, row) => sum + row.female_count, 0);
        },
        totalUsers() {
            return this.roles.reduce((sum, row) => sum + row.total_users, 0);
        },
        malePercentageTotal() {
            return this.totalUsers ? ((this.totalMale * 100) / this.totalUsers).toFixed(2) : '0.00';
        },
        femalePercentageTotal() {
            return this.totalUsers ? ((this.totalFemale * 100) / this.totalUsers).toFixed(2) : '0.00';
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        fetch() {
            axios.get(this.currentUrl + '/insights',{
                params : {
                    option : 'gad-roles',
                    laboratory: this.laboratory,
                    year: this.year
                }
            })
            .then(response => {
                this.roles = response.data;
            })
            .catch(err => console.log(err));
        }
    }
}
</script>