<!-- ���₢���킹�y�[�W -->
<?php
require_once 'header.php';
require_once 'footer.php';
?>

<?php
/* header.php �ǂݍ��� */
head('contact', '���₢���킹 | IPUT�w���c��');
?>

<main class="contents">

    <!-- top -->
    <div class="ONE" id="contact-top">
        <img src="src/contact-top-img.jpg" class="w-100">
        <div class="TWO">
            <div class="THREE">
                <!-- ���₢���킹 -->
                <h1>���₢���킹</h1>
                <!-- CONTACT -->
                <h3>CONTACT</h3>
            </div>
        </div>
    </div>

    <!-- main -->
    <div class="">
        <div class="">
            <p>���T�C�g���́AIPUT�w���c�̂Ɋւ��邨�₢���킹�́A���L�̂��₢���킹�t�H�[����育�A�����������B<br>
                ���₢���킹������O�ɁA�悭���鎿��iFAQ�j�ɓ������₪�Ȃ������m�F���������B<br>
                ���A���T�C�g���́AIPUT�w���c�̈ȊO�̂��₢���킹�ɂ��܂��Ă͂��������邱�Ƃ��o���܂���̂ł��炩���߂��������������B</p>
        </div>

        <!-- Bootstrap �悭���鎿�₱���炩�� -->
        <div class="">
            <button type="button" class="btn btn-secondary btn-lg">�g�b�v�y�[�W�֖߂�</button>
        </div>
        <!-- �K�{ �����O -->
        <div class="required_box">

            <h5><span class="badge bg-secondary">�K�{</span></h5>
            <div class="FOUR">
                <h3><b>�����O</b></h3>
            </div>
        </div>
        <!-- from input text large -->
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">�����O����͂��Ă�������</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
        <!-- �K�{ ���[���A�h���X -->
        <div class="required_box">
            <h5><span class="badge bg-secondary">�K�{</span></h5>
            <div class="FOUR">
                <h3><b>���[���A�h���X</b></h3>
            </div>
        </div>
        <!-- from input text large -->
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">���[���A�h���X����͂��Ă�������</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
        <!-- �K�{ ���₢���킹���e -->
        <div class="required_box">
            <h5><span class="badge bg-secondary">�K�{</span></h5>
            <div class="FOUR">
                <h3><b>���₢���킹���e</b></h3>
            </div>
        </div>
        <!-- from input Textarea -->
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <!-- ���Ƀg�b�v�y�[�W�ɖ߂�(Bootstrap Button�@Large Secondary) �E���M���� -->
        <div class="top_button">
            <button type="button" class="btn btn-secondary btn-lg">�g�b�v�y�[�W�֖߂�</button>
        </div>
        <div class="send_button">
            <button type="button" class="btn btn-primary btn-lg">���M����</button>
        </div>




        <!-- �t�b�^�[ -->
        <?php footer('index'); ?>