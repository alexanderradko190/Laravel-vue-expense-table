<script>
export default {
  data() {
    return {
      date: null,
      sum: null,
      comment: null
    }
  },
  methods() {
    return {
      handleSubmit() {
        console.log(this.date, this.sum, this.comment);
      }
    }
  }
}
</script>

<template>
  <main class="row">
    <form id="expense_form" class="m-4 mx-auto col-10 col-md-8 col-lg-6">
      <div>
        <div class="label">
          Дата
        </div>
        <div class="form-control p-0 mb-4">
          <input class="form-control" type="datetime-local" :value="date" name="date" id="date">
        </div>
      </div>
      <div>
        <div class="label">
          Сумма
        </div>
        <div class="form-control p-0 mb-4">
          <input class="form-control" type="number" :value="sum" name="sum" id="sum">
        </div>
      </div>
      <div>
        <div class="label">
          Комментарий
        </div>
        <div class="form-control p-0 mb-4">
          <input class="form-control" type="text" :value="comment" name="comment" id="comment">
        </div>
      </div>
      <input type="submit" @click.prevent="handleSubmit" class="btn btn-success">
    </form>
  </main>
</template>
