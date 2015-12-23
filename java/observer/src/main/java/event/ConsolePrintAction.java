package event;

public class ConsolePrintAction extends EventBindableAction {
    public void execute() {
        System.out.println("ConsolePrintCallback was executed!");
    }
}
