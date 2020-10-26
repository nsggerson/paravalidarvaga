<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelProduto;
use App\Models\ModelModelo;
use App\Models\ModelMarca;
use App\User;

class CarroController extends Controller
{

    private $objMarca;
    private $objModelo;
    private $objProduto;
    private $objUser;

    public function __construct()
    {
        $this->objMarca= new ModelMarca();
        $this->objModelo= new ModelModelo();
        $this->objProduto= new ModelProduto();
        $this->objUser=new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //print_r($this->objMarca);
        //dd($this->objMarca->find(1)->relModelo);
        $veiculos = $this->objMarca->all();
        return view('index',compact('veiculos'));
    }

    public function modelos($id){
        $modelos = $this->objMarca->find($id)->relModelo;
        return view('templates/modelo',compact('modelos'));
    }

    public function produtos($id){
        $produtos = $this->objModelo->find($id)->relProduto;
        return view('templates/produtos',compact('produtos'));
    }

    public function build() {
        /*
        return $this->from('rico@capim.art.br', 'Rico Crivelli')
            ->replyTo('ricardocrivelli@gmail.com', 'Ricardo Crivelli')
            ->view('view.name');*/
            echo 'Ola';
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
