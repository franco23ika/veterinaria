@extends('cuerpo')
@section('title', 'Titulo')


@section('contenido')

<v-col v-for="card in cards" :key="card" cols="12">
    <v-card>
        <v-subheader>@{{ card }}</v-subheader>

        <v-list two-line>
            <template v-for="n in 6">
                <v-list-item :key="n">
                    <v-list-item-avatar color="grey darken-1">
                    </v-list-item-avatar>

                    <v-list-item-content>
                        <v-list-item-title>Message @{{ n }}</v-list-item-title>

                        <v-list-item-subtitle>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                            repellendus distinctio similique
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>

                <v-divider v-if="n !== 6" :key="`divider-${n}`" inset></v-divider>
            </template>
        </v-list>
    </v-card>
</v-col>



@endsection


@section('script')

<script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
	  mouted: async function () {
		 this.isLoading = false;
		
	  },
	  data:{
		 isLoading: true,
                // fullPage: true,
		 cards: ['Today', 'Yesterday'],
            drawer: null,
			group: 0,
            links: [
                ['mdi-inbox-arrow-down', 'Inbox'],
                ['mdi-send', 'Send'],
                ['mdi-delete', 'Trash'],
                ['mdi-alert-octagon', 'Spam'],
            ],
            //prueba
            initiallyOpen: ['public','static'],
      files: {
        html: 'mdi-language-html5',
        js: 'mdi-nodejs',
        json: 'mdi-code-json',
        md: 'mdi-language-markdown',
        pdf: 'mdi-file-pdf',
        png: 'mdi-file-image',
        txt: 'mdi-file-document-outline',
        xls: 'mdi-file-excel',
      },
      tree: ['node_modules'],
      items: [
        {
          name: '.git',
          link: '/',
         
        },
        {
          name: 'node_modules',
        },
        {
          name: 'public',
          children: [
            {
              name: 'static',
              children: [{
                name: 'logo.png',
                file: 'png',
              
              }],
            },
            {
              name: 'favicon.ico',
              file: 'png',
            },
            {
              name: 'index.html',
              file: 'html',
            },
          ],
        },
        {
          name: '.gitignore',
          file: 'txt',
        },
        {
          name: 'babel.config.js',
          file: 'js',
        },
        
        {
          name: 'package.json',
          file: 'json',
        },
        {
          name: 'README.md',
          file: 'md',
        },
        {
          name: 'vue.config.js',
          file: 'js',
        },
        {
          name: 'yarn.lock',
          file: 'txt',
        },
      ],
		
		},
    });
</script>

@endsection