<script>

import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

export default {
  data() {
    return {
      items: null,
      handleDelete: (idx, e) => {
        fetch('http://localhost:8000/api/test/expense/' + e.target.dataset.id, { method: 'DELETE' })
            .then(() => {
              fetch('http://localhost:8000/api/test/expense').then((response) => {
                response.json().then(data => this.items = data);
              });
              toast("Запись успешно удалена", {
                autoClose: 3000,
              });
            });
        console.log('Delete', idx)
      },
      handleChange: (idx, e) => {
        console.log('Change', idx, this.items[idx])
      }
    }
  },
  mounted() {
    fetch('http://localhost:8000/api/test/expense').then((response) => {
      response.json().then(data => this.items = data);
    });
  }
}
</script>

<template>
  <main class="m-4 table-responsive">
    <table v-if="items" class="table">
      <tr class="border border-secondary">
        <th class="p-2">Сумма</th>
        <th class="p-2">Дата</th>
        <th class="p-2">Описание</th>
        <th class="p-2"></th>
      </tr>
      <tr v-for="(item, idx) in items" :key="item.id" class="border border-secondary">
        <td class="p-2">{{item.sum}}</td>
        <td class="p-2">{{item.date}}</td>
        <td class="p-2">{{item.comment}}
        </td>
        <td class="d-flex flex-column p-2">
<!--          idx получает номер записи-->
          <div>
            <a href="#" class="text-decoration-none btn btn-danger w-100" :data-id="item.id" @click.prevent="handleDelete(idx, $event)">Удалить</a>
          </div>
          <div>
            <a href="#" class="text-decoration-none btn btn-success w-100" :data-id="item.id" @click.prevent="handleChange(idx, $event)">Изменить</a>
          </div>
        </td>
      </tr>
    </table>
  </main>
</template>
