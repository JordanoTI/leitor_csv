<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css', true) }}" rel="stylesheet">
</head>
<body>
@component('components.navbar')
@endcomponent
<div id="historic-table" v-if="historics">
    <div>
      <div id="historic-table-heading">
        <div class="order-id">#:</div>
        <div>Cliente:</div>
        <div>Opção 1:</div>
        <div>Opção 2:</div>
        <div>Opção 3:</div>
        <div>Ações:</div>
      </div>
    </div>
    <div id="historic-table-rows">
      <div class="historic-table-row" v-for="historic in historics" :key="historic.id">
        <div class="order-number"></div>
        <div>Teste</div>
        <div>Teste</div>
        <div>Teste</div>
        <div>
          <ul v-for="(opcional, index) in historic.opcionais" :key="index">
            <li>Opcional</li>
          </ul>
        </div>
        <div>
          <select name="status" class="status" @change="updatehistoric($event, historic.id)">
            <option :value="s.tipo" v-for="s in status" :key="s.id" :selected="historic.status == s.tipo">
             
            </option>
          </select>
          <button class="delete-btn" @click="deletehistoric(historic.id)">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
@component('components.footer')
@endcomponent
</body>