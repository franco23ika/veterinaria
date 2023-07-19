 <v-list nav dense  class="red_list" dense>
	<v-list-item-group v-model="group"  active-class="success" >
		<v-list-item href="{{ url('/') }}">
			<v-list-item-title >
				<v-icon>mdi-home</v-icon> Inicio
			</v-list-item-title>
		</v-list-item>

		<v-list-item>
			<v-list-item-title>Bar</v-list-item-title>
		</v-list-item>

		<v-list-item>
			<v-list-item-title>Fizz</v-list-item-title>
		</v-list-item>

		<v-list-item>
			<v-list-item-title>Buzz</v-list-item-title>
		</v-list-item>

		<v-list-group :value="false" no-action >
			<template v-slot:activator>
				<v-list-item-title>Users</v-list-item-title>
			</template>
			 <v-list-item link   sub-group>
				<v-list-item-icon>
					<v-icon >mdi-home</v-icon>
				  </v-list-item-icon>
				<v-list-item-title>Fizz</v-list-item-title>
				
			</v-list-item>
	
		
		</v-list-group>
	</v-list-item-group>

	
</v-list> 

