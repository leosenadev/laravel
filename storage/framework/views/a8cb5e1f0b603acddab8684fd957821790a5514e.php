<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('conteudo'); ?>
    <?php echo $__env->make('site.layouts._partials.topo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="<?php echo e(asset('/img/check.png')); ?>">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="<?php echo e(asset('img/check.png')); ?>">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="<?php echo e(asset('img/player_video.jpg')); ?>">
            </div>
        </div>

        <div class="direita">
            <div class="contato">

                <?php $__env->startComponent('site.layouts._components.form_contato_principal',['dataAtual'=> date('d / m / Y'),'classe'=>'borda-branca']); ?>
                    <h1> Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                    <p>

                    <?php if (isset($__componentOriginalcb45d8631710312d2cdef6df830987f2b30f9ae5)): ?>
<?php $component = $__componentOriginalcb45d8631710312d2cdef6df830987f2b30f9ae5; ?>
<?php unset($__componentOriginalcb45d8631710312d2cdef6df830987f2b30f9ae5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/leonardo/Documentos/code/app_super_gestao/resources/views/site/principal.blade.php ENDPATH**/ ?>