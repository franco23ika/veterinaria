<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vuetify.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/vue-loading-overlay@6/dist/css/index.css" rel="stylesheet">
    @yield('estilos')

</head>
<style>
    #loading {
        background-color: #00222b;
        color: white;
        font-size: 50px;
        padding-top: 40vh;
        height: 300vh;
        text-align: center;

    }

    .red_list .v-list-item-group .v-list-item--active{
  background-color: red;
  color: white;
}
</style>

<body>
    <div id="app">
        <div id="loading" v-show="isLoading == false">CARGANDO...</div>


        <v-app v-show="isLoading == true">


            <v-navigation-drawer v-model="drawer" app>
                <v-sheet color="grey lighten-4" class="pa-4">
                    <v-avatar class="mb-4" color="grey darken-1" size="64"><img
                            src="https://randomuser.me/api/portraits/men/85.jpg" alt="photo-perfil"></v-avatar>

                    <div>john@vuetifyjs.com</div>
                </v-sheet>

                <v-divider></v-divider>

                @include('menu')

            </v-navigation-drawer>

            <v-app-bar app>
                <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

                <v-toolbar-title>Application
                    
                </v-toolbar-title>
                <v-spacer></v-spacer>

                    {{-- <v-btn color="primary" fab small dark>
                        <v-icon>mdi-pencil</v-icon>
                      </v-btn> --}}
                      <div class="text-center">
                        <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-x>
                          <template v-slot:activator="{ on, attrs }">
                            <v-btn color="indigo" dark v-bind="attrs" v-on="on">
                              Menu as Popover
                            </v-btn>
                          </template>
                      
                          <v-card>
                            <v-list>
                              <v-list-item>
                                <v-list-item-avatar>
                                  <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John">
                                </v-list-item-avatar>
                      
                                <v-list-item-content>
                                  <v-list-item-title>John Leider</v-list-item-title>
                                  <v-list-item-subtitle>Founder of Vuetify</v-list-item-subtitle>
                                </v-list-item-content>
                      
                                <v-list-item-action>
                                  <v-btn :class="fav ? 'red--text' : ''" icon @click="fav = !fav">
                                    <v-icon>mdi-heart</v-icon>
                                  </v-btn>
                                </v-list-item-action>
                              </v-list-item>
                            </v-list>
                      
                            <v-divider></v-divider>
                      
                            <v-list>
                              <v-list-item>
                                <v-list-item-action>
                                  <v-switch v-model="message" color="purple"></v-switch>
                                </v-list-item-action>
                                <v-list-item-title>Enable messages</v-list-item-title>
                              </v-list-item>
                      
                              <v-list-item>
                                <v-list-item-action>
                                  <v-switch v-model="hints" color="purple"></v-switch>
                                </v-list-item-action>
                                <v-list-item-title>Enable hints</v-list-item-title>
                              </v-list-item>
                            </v-list>
                      
                            <v-card-actions>
                              <v-spacer></v-spacer>
                      
                              <v-btn text @click="menu = false">
                                Cancel
                              </v-btn>
                              <v-btn color="primary" text @click="menu = false">
                                Save
                              </v-btn>
                            </v-card-actions>
                          </v-card>
                        </v-menu>
                      </div>
            </v-app-bar>

            <v-main>
                <v-container class="py-8 px-6" fluid>
                    <v-row>
                        @yield('contenido')

                    </v-row>
                </v-container>
            </v-main>
        </v-app>

    </div>

</body>
<script src="{{ asset('js/vue.js') }}"></script>

<script src="{{ asset('js/vuetify.js') }}"></script>

<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="https://unpkg.com/vue-router@4"></script>

@yield('script')
</html>