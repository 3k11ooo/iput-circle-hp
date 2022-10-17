<script>
(() => {
  'use strict'

  // Bootstrap�J�X�^�����؃X�^�C����K�p���Ă��ׂẴt�H�[�����擾
  const forms = document.querySelectorAll('.needs-validation')

  // ���[�v���ċA����h��
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>