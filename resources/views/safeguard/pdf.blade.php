<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
        <p class="text-left">Left aligned text on all viewport sizes.</p>
        <p class="text-center">Center aligned text on all viewport sizes.</p>
        <p class="text-right">Right aligned text on all viewport sizes.</p>
        
        <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
        <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
        <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
        <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
                    Velas Vallarta Resorts
                    Av Paseo de la Marina 
                    Nte 585, Marina Vallarta,
                    48354 Puerto Vallarta, Jal. 
                    P: 322 226 8673 
                    Fecha: ___ /___ /______ 

                        Para:
                        Empleado: {{$safeguard->employee->name_employee}}
                        Numero de empleado: {{$safeguard->employee->controlnum}}

                    Recibí de Hotel Velas Vallarta el siguiente equipo: Serial del equipo: {{$safeguard->product->serialnumber}}, modelo: {{$safeguard->product->model}}, marca: {{$safeguard->product->trademark}}, pertenecientes al folio {{$safeguard->id}} 
                    Dicho equipo estará bajo mi custodia y responsabilidad para el desarrollo exclusivo de mis funciones de trabajo dentro de la empresa, me comprometo a cuidarlo y devolverlo en cuanto me lo soliciten o en caso de que mi relación de trabajo de por terminado. Este equipo lo entregare al departamento de TECNOLOGIAS DE LA INFORMACION (TI) o a quien este último designe.
                        
                        Esta estrictamente prohibido divulgar información relacionada con clientes, procesos, métodos, estrategias, planes proyectos, datos técnicos, de mercado o información confidencial. Reconozco que cualquier documentos o bien de la empresa son de la propiedad exclusiva de Velas Resorts. Por lo tanto, es compromiso el dar un uso adecuado a cualquier tipo de información, en cualquier tipo de formato, para beneficio de Velas Resorts y la seguridad de nuestros clientes. Me obligó a no retener información por medios electrónicos y/o copias de documento alguno, ya sean impresos o por cualquier otro medio de reproducción (manual, electrónico o mecánico).
                        
                        Para casos de pérdida del equipo o daño, el departamento de TI evaluara y dictaminara la correspondiente al mismo. 
                        
                        Cualquier daño y/o perdida, el departamento de TI evaluara y dictaminara el costo de la perdida o insumo que será cubierta con cargo al Responsable, ya sea deduciéndolo de su sueldo quincenal o aplicando el criterio que el departamento de  Contraloría del Hotel en común acuerdo con el jefe de área indique. Cada mes el equipo entregado será evaluado verificando integridad física y lógica del dispositivo.
                        
                        NOTA: este resguardo sustituye a cualquier otro firmado con anterioridad y tendrá una vigencia hasta en tanto no se tenga la devolución del equipo y accesorios mencionados.
                        
                                Responsable
                                    Dpto. de TI

                                    {{$safeguard->employee->name_employee}}
                                    Ing. Salvador Ramos

    </body>
</html>