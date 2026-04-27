<div>
  <div class="feature-card-form">
    <p class="page-header-eyebrow">Formulario</p>
    <h2 class="section-title mb-4" style="font-size:1.8rem">Envianos un <span>mensaje</span></h2>

    {{-- Mensaje de éxito (oculto por defecto) --}}
    <div id="form-success" style="display:none">
      <div style="
        background: rgba(217,4,41,0.08);
        border: 1px solid var(--color-red);
        border-radius: var(--radius-lg);
        padding: 2.5rem;
        text-align: center;
      ">
        <div style="
          width: 70px; height: 70px;
          background: rgba(217,4,41,0.12);
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 0 auto 1.25rem;
          font-size: 2rem;
          color: var(--color-red);
        ">
          <i class="bi bi-check-lg"></i>
        </div>
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; letter-spacing: .05em; margin-bottom: .5rem;">
          ¡Mensaje enviado!
        </h3>
        <p style="color: var(--color-muted); margin-bottom: 1.5rem; font-size: .95rem;">
          Gracias por contactarnos. Te respondemos en menos de 24 horas hábiles.
        </p>
        <button onclick="resetForm()" class="btn-outline-gf" type="button">
          Enviar otro mensaje
        </button>
      </div>
    </div>

    {{-- Formulario --}}
    <form id="contact-form" novalidate>
      <div class="row g-3">

        <div class="col-sm-6">
          <label class="form-label-gf" for="nombre">Nombre</label>
          <input class="form-control-gf" type="text" id="nombre" name="nombre" placeholder="Tu nombre"
            autocomplete="given-name" />
          <span class="form-error" data-field="nombre"></span>
        </div>

        <div class="col-sm-6">
          <label class="form-label-gf" for="apellido">Apellido</label>
          <input class="form-control-gf" type="text" id="apellido" name="apellido" placeholder="Tu apellido"
            autocomplete="family-name" />
          <span class="form-error" data-field="apellido"></span>
        </div>

        <div class="col-sm-6">
          <label class="form-label-gf" for="email">Email</label>
          <input class="form-control-gf" type="email" id="email" name="email" placeholder="tu@email.com"
            autocomplete="email" />
          <span class="form-error" data-field="email"></span>
        </div>

        <div class="col-sm-6">
          <label class="form-label-gf" for="telefono">Teléfono (opcional)</label>
          <input class="form-control-gf" type="tel" id="telefono" name="telefono" placeholder="+54 11 ..."
            autocomplete="tel" />
        </div>

        @if(request()->is('consultas'))

          <div class="col-12">
            <label class="form-label-gf" for="asunto">Asunto</label>
            <select class="form-control-gf" id="asunto" name="asunto">
              <option value="" disabled selected>Seleccioná un asunto</option>
              <option value="pedido">Consulta sobre pedido</option>
              <option value="producto">Consulta sobre producto</option>
              <option value="envio">Información de envío</option>
              <option value="devolucion">Devolución / cambio</option>
              <option value="otro">Otro</option>
            </select>
            <span class="form-error" data-field="asunto"></span>
          </div>

        @endif


        <div class="col-12">
          <label class="form-label-gf" for="mensaje">Mensaje</label>
          <textarea class="form-control-gf" id="mensaje" name="mensaje"
            placeholder="Escribí tu mensaje acá..."></textarea>
          <span class="form-error" data-field="mensaje"></span>
        </div>

        <div class="col-12">
          <button type="submit" class="btn-primary-gf w-100" style="text-align:center">
            <i class="bi bi-send me-2"></i>Enviar mensaje
          </button>
        </div>

      </div>
    </form>
  </div>
</div>