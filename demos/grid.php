
			<h1>Grid system</h1>
			<section class="item">
				<h3>Grid and cols min-max width info</h3>
				<div class="content">
					<h3>XS - extra small</h3>
					<p>
						<strong>Start</strong>: 0px<br />
						<strong>End</strong>: 500px
					</p>
					
					<h3>SM - small</h3>
					<p>
						<strong>Start</strong>: 501px<br />
						<strong>End</strong>: 767px
					</p>
					
					<h3>MD - medium</h3>
					<p>
						<strong>Start</strong>: 768px<br />
						<strong>End</strong>: 991px
					</p>
					
					<h3>LG - large</h3>
					<p>
						<strong>Start</strong>: 992px<br />
						<strong>End</strong>: 1199px
					</p>
					
					<h3>XL - extra large</h3>
					<p>
						<strong>Start</strong>: 1200px<br />
						<strong>End</strong>: 1499px
					</p>
					
					<h3>HD - high definition (fullhd)</h3>
					<p>
						<strong>Start</strong>: 1500px<br />
						<strong>End</strong>: 1999px
					</p>
					
					<h3>2K and bigger</h3>
					<p>
						<strong>Start</strong>: 2000px<br />
						<strong>End</strong>: 9999px aka "infinite"
					</p>
					
					<h3>print</h3>
					<p>
						<strong>.col-pnt-[]</strong>: sets col width for printing<br />
					</p>
					
					<strong>Resize your browser to see difference</strong>
			
				</div>
			</section>
			
		</div>
	</div>
</section>


<div class="container demo_container">
	.container
</div>
<div class="container fluid demo_container">
	.container.fluid || .container-fluid
</div>

<div class="container max_2k fluid demo_container">
	.container.fluid.max_2k
</div>

<div class="container max_hd fluid demo_container">
	.container.fluid.max_hd
</div>

<div class="container max_xl fluid demo_container">
	.container.fluid.max_xl
</div>

<div class="container max_lg fluid demo_container">
	.container.fluid.max_lg
</div>

<div class="container max_md fluid demo_container">
	.container.fluid.max_md
</div>

<div class="container max_sm fluid demo_container">
	.container.fluid.max_sm
</div>


<div class="container fluid demo_container">
	<div class="row va-top demo_row">
		<div class="demo_col col-xs-0 col-sm-1">
			xs-0 sm-1
		</div>
		<div class="demo_col col-xs-0 col-md-1">
			xs-0 md-1
		</div>
		<div class="demo_col col-xs-0 col-lg-1">
			xs-0 lg-1
		</div>
		<div class="demo_col col-xs-0 col-xl-1">
			xs-0 xl-1
		</div>
		<div class="demo_col col-xs-0 col-hd-1">
			xs-0 hd-1
		</div>
		<div class="demo_col col-xs-0 col-2k-1">
			xs-0 2k-1
		</div>
	</div>
</div>


<div class="container fluid demo_container">
	<div class="row va-top demo_row">
		<div class="demo_col col-xs-12 col-sm-12 col-md-4 o-xs-3 o-sm-3 o-md-1" style="background: #edd1dc">
			first on full, last on mobile
		</div>
		<div class="demo_col col-xs-12 col-sm-12 col-md-4 o-xs-2 o-sm-2 o-md-2">
			stays here!
		</div>
		<div class="demo_col col-xs-12 col-sm-12 col-md-4 o-xs-1 o-xs-1 o-md-3" style="background: #d4d1ed">
			last on full, first on mobile
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-top demo_row">
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-6">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-6">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-4">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-4">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
		<div class="demo_col col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8">
			col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xs-2 col-hd-1 col-2k-1 col-pnt-8
		</div>
	</div>
</div>


<div class="container fluid demo_container">
	<div class="row va-bottom demo_row">
		<div class="col-3 demo_col">
			col-3 (va-bottom)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-bottom)
			<br /><br />
			Hello world!
		</div>
		<div class="col-3 demo_col">
			col-3 (va-bottom)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle demo_row">
		<div class="col-3 demo_col">
			col-3 (va-middle)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle)
			<br /><br />
			Hello world!
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-middle demo_row">
		<div class="col-3 demo_col">
			col-3 (va-middle a-middle)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-middle)
			<br /><br />
			Hello world!
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-middle)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-left demo_row">
		<div class="col-3 demo_col">
			col-3 (va-middle a-left)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-left)
			<br /><br />
			Hello world!
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-left)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-3 demo_col">
			col-3 (va-middle a-center)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-center)
			<br /><br />
			Hello world!
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-center)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-right demo_row">
		<div class="col-3 demo_col" >
			col-3 (va-middle a-right)
		</div>
		<div class="col-3 demo_col">
			col-3 (va-middle a-right)
			<br /><br />
			Hello world!
		</div>
	</div>
</div>


<div class="container fluid demo_container">
	<div class="row va-middle fill demo_row">
		<div class="col-2 demo_col" >
			col-2 (va-middle fill)
		</div>
		<div class="col-2 demo_col">
			col-2 (va-middle fill)
			<br /><br />
			Hello world!
		</div>
		<div class="col-2 demo_col" >
			col-2 (va-middle fill)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row a-center stretch demo_row">
		<div class="col-2 demo_col" >
			col-2 (va-middle stretch)
		</div>
		<div class="col-2 demo_col">
			col-2 (va-middle stretch)
			<br /><br />
			Hello world!
			<br /><br />
			Hello world!
		</div>
		<div class="col-2 demo_col" >
			col-2 (va-middle stretch)
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row fill stretch demo_row">
		<div class="col-2 demo_col" >
			col-2 (fill stretch)
		</div>
		<div class="col-2 demo_col">
			col-2 (fill stretch)
			<br /><br />
			Hello world!
			<br /><br />
			Hello world!
		</div>
		<div class="col-2 demo_col" >
			col-2 (fill stretch)
		</div>
	</div>
</div>



<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-20p demo_col">
			col-20p (va-middle)
			<br /><br />
			percentage width ftw
		</div>
		<div class="col-20p demo_col">
			col-20p (va-middle)
			<br /><br />
			Hello world!
		</div>
		<div class="col-20p demo_col">
			col-20p (va-middle)
		</div>
		<div class="col-20p demo_col">
			col-20p (va-middle)
			<br /><br />
			Hello world!
		</div>
		<div class="col-20p demo_col">
			col-20p (va-middle)
		</div>
	</div>
</div>


<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-5th demo_col">
			col-5th
		</div>
		<div class="col-5th demo_col">
			col-5th
		</div>
		<div class="col-5th demo_col">
			col-5th
		</div>
		<div class="col-5th demo_col">
			col-5th
		</div>
		<div class="col-5th demo_col">
			col-5th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-xs-12 col-sm-5th col-md-10th demo_col">
			col-xs-12 col-sm-5th col-md-10th
		</div>
		<div class="col-xs-12 col-sm-5th col-md-10th demo_col">
			col-xs-12 col-sm-5th col-md-10th
		</div>
		<div class="col-xs-12 col-sm-5th col-md-10th demo_col">
			col-xs-12 col-sm-5th col-md-10th
		</div>
		<div class="col-xs-12 col-sm-5th col-md-10th demo_col">
			col-xs-12 col-sm-5th col-md-10th
		</div>
		<div class="col-xs-12 col-sm-5th col-md-10th demo_col">
			col-xs-12 col-sm-5th col-md-10th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
		<div class="col-7th demo_col">
			col-7th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
		<div class="col-8th demo_col">
			col-8th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
		<div class="col-9th demo_col">
			col-9th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
		<div class="col-10th demo_col">
			col-10th
		</div>
	</div>
</div>

<div class="container fluid demo_container">
	<div class="row va-middle a-center demo_row">
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
		<div class="col-11th demo_col">
			col-11th
		</div>
	</div>
</div>
