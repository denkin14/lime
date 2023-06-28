<template>
    <div>
        <input type="text" v-model="searchTerm" @input="search" placeholder="Search...">
        <div>
            <h2>Customers</h2>
            <ul>
                <li v-for="customer in customers" :key="customer.id">{{ customer.first_name }} {{ customer.last_name }}</li>
            </ul>
        </div>
        <div>
            <h2>Tickets</h2>
            <ul>
                <li v-for="ticket in tickets" :key="ticket.id">{{ ticket.title }}</li>
            </ul>
        </div>
        <div>
            <h2>Payments</h2>
            <ul>
                <li v-for="payment in payments" :key="payment.id">{{ payment.transaction_code }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';
import { usePage, useInertia } from '@inertiajs/inertia-vue3';

export default {
    setup() {
        const searchTerm = ref('');
        const customers = ref([]);
        const tickets = ref([]);
        const payments = ref([]);

        const { get } = useInertia();

        const search = () => {
            get(route('search'), { term: searchTerm.value }).then((response) => {
                customers.value = response.customers;
                tickets.value = response.tickets;
                payments.value = response.payments;
            });
        };

        return {
            searchTerm,
            customers,
            tickets,
            payments,
            search,
        };
    },
};
</script>