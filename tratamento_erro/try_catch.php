<div class="titulo">Try/Catch</div>

<?php
// echo 7 / 0; // resulta INFINITO
// echo intdiv(7, 0); // resulta erro


try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo 'Teve um erro aqui<br>';
}


/// TIPO DE EXCEPTION com THROWABLE /////////////////////////////////
try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) { // DIVISÃO POR ZERO
    echo 'Divisão por zero<br>';
} catch (Throwable $e) { // erro encontrado
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
    // $e->getMessage(): throw new Exception('Um erro muito estranho');

} finally { // independendo do resultado sem vai EXECUTAR
    echo 'Sempre executado!<br>';
}
///////////////////////////////////////////////////


/// TIPO DE EXCEPTION /////////////////////////////////
try {
    new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) { // DIVISÃO POR ZERO
    echo 'Divisão por zero<br>';
} catch (Exception $e) { // erro encontrado
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
    // $e->getMessage(): throw new Exception('Um erro muito estranho');

} finally { // independendo do resultado sem vai EXECUTAR
    echo 'Sempre executado!<br>';
}
///////////////////////////////////////////////////
echo 'Execução continua... <br>';

// DIFERENÇA ENTRE EXCEPTION VS THROWABLE

// Throwable é superclasse de Exception bem como Error.
// THROWABLE é classe-mãe
// Exception e Error são classe-filhas

// O mais recomendável é Exception em vez de THROWABLE
// utiliza em caso específico THROWABLE.

// Exception (padrão)
// Throwable (mais avançado)



/** MENSAGEM DE EXCEPTION */
// getMessage — Obtém a mensagem da exceção
// getPrevious — Retorna Exception anterior
// getCode — Obtém o código da exceção
// getFile — Obtém o arquivo no qual a exceção ocorreu
// getLine — Obtém a linha na qual a exceção ocorreu
// getTrace — Obtém a stack trace
// getTraceAsString — Obtém a stack trace como uma string

/*
Error
      ArithmeticError
        DivisionByZeroError
      AssertionError
      ParseError
      TypeError
        ArgumentCountError
    Exception
      ClosedGeneratorException
      DOMException
      ErrorException
      IntlException
      LogicException
        BadFunctionCallException
          BadMethodCallException
        DomainException
        InvalidArgumentException
        LengthException
        OutOfRangeException
      PharException
      ReflectionException
      RuntimeException
        OutOfBoundsException
        OverflowException
        PDOException
        RangeException
        UnderflowException
        UnexpectedValueException
      SodiumException

*/