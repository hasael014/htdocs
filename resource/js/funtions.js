async function PaginaDeCodigos(){
	const resp = ('https://api.npoint.io/f334a0f8addbb676b3ba');
	const fileJson = await resp.json();
		
	let nlista = fileJson.barraDeNavegacion.linksdepaginas.length;
	console.log(nlista);
}

PaginaDeCodigos();