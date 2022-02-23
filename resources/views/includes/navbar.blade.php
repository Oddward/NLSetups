<nav style="
			width: 100%;
			height: auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding-left: 2rem;
			padding-right: 2rem;
			padding-top: 1rem;
			padding-bottom: 1rem;">
	<a href="" >
		{{-- <img src="{{ asset('img\WordmarkWithLogoHorizontal.png') }}" alt="site logo" height="30px"> --}}
        <h1>NLSetups</h1>
	</a>
	<ul 
		style="
			list-style: none;
			display: inline-flex;
			justify-content: space-evenly;"
			>
		<a class="label-isolated relative muted-till-hover" href="">
			<x-gmdi-info-outline class="medium-icon animated"/>
			<span class="bottom-label animated muted-text">about</span>
		</a>
		<a class="label-isolated relative muted-till-hover" href="">
			<x-gmdi-add-circle-outline class="medium-icon animated"/>
			<span class="bottom-label animated muted-text">submit</span>
		</a>
		<a class="label-isolated relative muted-till-hover" href="">
			<x-gmdi-account-circle class="medium-icon animated"/>
			<span class="bottom-label animated muted-text">profile</span>
		</a>
	</ul>
</nav>
