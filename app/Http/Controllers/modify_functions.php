public function editProduct($id)
     {
         $product = Product::find($id);
         return view('amministrazione.editProduct')->with('product', $product);
     }


     public function aggiornaProduct(Request $request)
     {
         $product = Product::find($request->input('id'));
         $product->name=$request->input('nameUpdate');
         $product->description=$request->input('descriptionUpdate');
         $product->price=$request->input('priceUpdate');
         $product->discount=$request->input('discountUpdate');
         $product->category=$request->input('categoryUpdate');
         
         

        


          if ($request->hasFile('imageUpdate')) {
            $product->image=$request->file('imageUpdate');
            $fileName =$request->file('imageUpdate');
            $fileName= $request->file('imageUpdate')->getClientOriginalName();
             //carica il file nella cartella temporanea
             $path=$request->file('imageUpdate')->storeAs('public/img_prodotto', $fileName);
             //print($path);
             //path=public/img_prodotto/cipolla.png 
             $file = $request->file('imageUpdate');
             //print($file);
             //private/var/tmp/phpigtvGL
             //definisco il path finale
             $path = public_path().'/tema/images';
             $uplaod = $file->move($path, $fileName);
             $product->image= 'images/'.$fileName;
         } else {
             $fileName ='nessunaImg.jpg';
             //$fileName =$request->file('imageDefault');
         }
 
        
         $product->update();
         // metto in una sessione la scritta utente aggiornato che poi visualizzo in
         //listaUtenti.blade.php
         Session::put('success', 'Prodotto aggiornato');
         return redirect('/listaProdotti');
     }

     public function deleteProduct($id)
     {
         $product =   Product::find($id);
        
         $product->delete();
         Session::put('success', 'Prodotto Cancellato');
         return redirect('/listaProdotti');
     }